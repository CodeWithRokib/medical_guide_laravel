<?php

namespace App\Http\Controllers\backend;

use App\Patient;
use App\Models\Purchase;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Dieseas;
use App\Product;
use App\DurationVaccine;
use App\Models\Sale;
use App\CashBook;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class SaleController extends Controller
{

    public function __construct()
    {
        $current = Carbon::now()->format(' Y-m-d h:i:s');
        //dd(["time"=>$current]);
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $custom = explode("/",$request->custom_date);

        $sale_date = ($request->custom_date !=null ? date("Y-m-d",strtotime($request->custom_date))." ".Carbon::now()->format('h:i:s') : Carbon::now()->format(' Y-m-d'));

        $this->validate($request,[
            'patient_id'=>'required',
            'total_amount'=>'required',
            'total_paid'=>'required',
            'does_no'=>['required',Rule::unique('sales')->where('patient_id',$request->patient_id)->where('product_id',$request->product_id)->where('does_no',$request->does_no)]
        ],[
            'does_no'=>"Doss already applied for this Patient."
        ]);

        if($request->payment_type != 'cash'){
            $this->validate($request,[
                'payment_type'=>'required',
                'trxId'=>'required',
            ]);
        }
       /* $dose_exit= Sale::where("patient_id",$request->patient_id)->where("product_id",$request->product_id)->where("does_no",$request->does_no)->first();
        if($dose_exit){
            session()->flash("error","Already applied this dose no for this Customer");
            return redirect()->route('vaccine.apply');
        }*/


        /* multiple doss sale for an product start */
        if(Cart::count()>0){

            /* Invoice Create */
            $invoice = new Invoice();
            $invoice->invoice_no = Date('Y-m-d')."_".substr(md5(time()),0,6);
            $invoice->patient_id = $request->patient_id;
            $invoice->total = $request->total_amount;
            $invoice->discount = ($request->total_discount ? $request->total_discount : 0);
            $invoice->payment_type = $request->payment_type;
            if($request->payment_type !='cash'){
                $invoice->trxId=$request->trxId;
            }
            $invoice->user_id = Auth::user()->id;
            $invoice->warehouse_id = Auth::user()->warehouse_id;
            $invoice->customer_type = $request->customer_type;
            $invoice->product_type = $request->product_type;
            $invoice->note = $request->note;
            $invoice->custom_date = $sale_date;
            $invoice->save();
            $inv_id = $invoice->id;

            /* Sale Start */

            foreach (Cart::content() as $item){
         //       dd($item->options->user_id);
                if($item->options->user_id == Auth::user()->id && $item->options->saleType == 1){
                    $sale = new Sale;
                    $sale->invoice_id= $invoice->id;
                    $sale->from_warehouse_id= Auth::user()->warehouse_id;
                    $sale->product_id = $item->id;
                    $sale->patient_id = $request->patient_id;
                    $sale->doctor_id = $request->doctor_id or null;
                    $sale->does_no = $item->options->doss;
                    $sale->price = $item->price;
                    $sale->product_type = $request->product_type;
                    $sale->qty = 1;
                    $sale->custom_date = $sale_date;
                    $sale->save();

                    /* cart item remove after sold start */

                    Cart::remove($item->rowId);

                    /* cart item remove after sold end */
                }
            }
        }

        /* multiple doss sale for an product End */
        /* Sale End */
        /* CashBook Start */
        $cashbook = new CashBook;
        $cashbook->invoice_id = $invoice->id;
        $cashbook->income =$request->total_paid;
        $cashbook->save();

        $total =0;
        $invoice = Invoice::find($inv_id);
        $sales = Sale::query()->where('invoice_id',$invoice->id)->get();
        session()->flash('success','Sale has successfully complete');

        return view('admin.invoice.sell-invoice',compact('invoice','sales','total'));

    }
    
    
    public function AppliedHistory(){
        $this->checkpermission('PatientManagement/applied-history');
//        dd('hello');
        $applied = Sale::groupBy('patient_id')->where('product_type','vaccine')->get();
//        dd($applied);
        $url="hello";
        $result = QrCode::generate($url, 'picture.svg');
//        $html = "";


        return view('admin.patient.applied-history',compact('applied','result'));
    }



    //Other Product Sale Functions Start

    public function sellOtherProduct(){
        $this->checkpermission('PatientManagement/sell-other-product');
        $customers = Patient::query()->pluck('name','id');
//        $products =Purchase::query()->where('product_type','other')->groupBy('product_id')->get();
        $products =Product::query()->where('product_type','other')->pluck('name','id');

        return view('admin.patient.sell-other-product',compact('products','customers'));
    }

    public function productaddcart(Request $request){
        $product = Product::find($request->id);
        Cart::add([
            'id'=> $request->id,
            'name'=> $product->name,
            'price'=>$request->product_price,
            'qty'=>$request->qty,
            'options'=>[
                'user_id'=>Auth::user()->id,
            ]
        ]);
        echo $this->Carts();
    }

    /* Bucket List */

    public function Carts()
    {
        //Cart::destroy();
        $cart_info = Cart::content();
        $i=0;
        $total = 0;

        if(Cart::count() != 0){
            foreach($cart_info as $cart_details){
                $sub = $cart_details->price*$cart_details->qty;
                $total = $total+ $sub;

                echo '<tr>
                    <td>'.++$i.'</td>
                    <td>'.$cart_details->name.'</td>
                    <td>'.$cart_details->qty.'</td>
                    <td> 
                        '.$cart_details->price.'
                    </td>
                    <td> 
                        <span >'.$cart_details->price*$cart_details->qty.' tk </span>
                    </td>
                    <td> 
                        <button type="button" class="btn btn-danger" data-id="'.$cart_details->rowId.'" id="remove_item"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <script>
                      $("#total_amount").val('.$total.');
                </script>';
            }
        }
        else{
            echo '<tr><td colspan="6"><p class="bg-danger text-center" style="padding:8px 0"> No item found at Shopping-cart </p>';
        }

    }

    /* Bucket List End */

    /* Cart Remove and Add Start */
    public function CartsRemove(Request $request)
    {

        $rowId = $request->rowId;
        foreach(Cart::content() as $item){
            if($item->rowId == $rowId && $item->options->user_id == Auth::user()->id){
                Cart::remove($rowId);
            }
        }

        if(Cart::count() != 0){
            echo $this->Carts();
        }
        else{
            echo '<tr><td colspan="6"><p class="bg-danger text-center" style="padding:8px 0"> No item found at Shopping-cart </p></td></tr>
                <script>
                      $("#total_amount").val(0);
                </script>';
        }
    }

    public function product_find(Request $request){
//        $info = Product::find($request->id);
        $info =  Purchase::query()->where('product_id',$request->id)->latest()->first();

        $purchased = Purchase::query()->where('warehouse_id',Auth::user()->warehouse_id)->where('product_type','other')->where('product_id',$request->id)->sum('qty');
        $sold = Sale::query()->where('from_warehouse_id',Auth::user()->warehouse_id)->where('product_type','other')->where('product_id',$request->id)->sum('qty');
        $stock = $purchased-$sold;

        if($stock<=0){
            return 0;
        }

        $data = [];
        $data["id"]= $info->id;
        $data["price"]= $info->mrp;
        $data["stock"]= $stock;

        return response()->json($data);
    }
    public function getProductPrice(Request $request){
        $info = Product::find($request->id);
        $data =[];
        $data["id"]=$info->id;
        $data["price"]=$info->price;

        return response()->json($data);
    }

    public function customer_search(Request $request)
    {
        $supplier = Patient::find($request->customer_id);
        /*dd($supplier);
            foreach($supplier as $sup){*/
        echo '{"name":"'.$supplier->name.'","phone":"'.$supplier->phone.'","address":"'.$supplier->address.'"}';
        //  }

        //  echo '{"id":"1"}';
    }
    // Other product sale start
    public function sale_store(Request $request){
//        dd($request->all());

        if(empty($request->customer_id) or $request->customer_id==0){
            $this->validate($request,[
                'customer_name'=>'required',
                'phone'=>'required|unique:patients',
            ]);
        }

        $customer = Patient::find($request->customer_id);
        if(!$customer){
            /* customer add Start */
            $customer = new Patient();
            $customer->name = $request->customer_name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->save();
            $customer_id = $customer->id;

            /* customer add End */
        }else{
            $customer_id = $request->customer_id;
        }

        /* invoice create start */

        $invoice = new Invoice();
        if($request->payment_type =="bkash"){
            $invoice->trxId = $request->trxId;
        }
        else if($request->payment_type =="rocket"){
            $invoice->trxId = $request->trxId;
        }
        else if($request->payment_type =="check"){
            $invoice->trxId = $request->trxId;
        }else{
            $invoice->trxId = "none";
        }

        $inv_serial = substr(md5(time()),0,6);
        $invoice->invoice_no = Date('Y-m-d')."_".$inv_serial;
        $invoice->patient_id = $customer_id;
        $invoice->total = $request->total_amount;
        $invoice->discount = $request->total_discount;
        $invoice->payment_type = $request->payment_type;
        $invoice->note = $request->sale_note;
        $invoice->product_type = $request->product_type;
        $invoice->warehouse_id = Auth::user()->warehouse_id;
        $invoice->user_id = Auth::user()->id;
        $invoice->custom_date = ($request->custom_date !=null ? $request->custom_date : null);
        $invoice->save();

        /* invoice create End */

        /* purchase table data insert start */
        foreach(Cart::content() as $item){
//            dd($item);
            if(Auth::user()->id == $item->options->user_id){
                $sale = new Sale();
                $sale->from_warehouse_id = Auth::user()->warehouse_id;
//                $sale->user_id = $item->options->user_id;
                $sale->invoice_id = $invoice->id;
                $sale->product_id = $item->id;
                $sale->product_type = 'other';
                $sale->qty = $item->qty;
                $sale->price = $item->price;
                $sale->save();
            }
        }

        /* cashbook data insert start*/

        $cashbook = new CashBook;
        $cashbook->invoice_id = $invoice->id;
        $cashbook->income = $request->total_paid;
        $cashbook->save();

        /* Cart Destroy according to Warehouse start */

        foreach(Cart::content() as $item) {
            if (Auth::user()->id == $item->options->user_id) {
                Cart::destroy();
            }
        }

        /* Cart Destroy according to Warehouse start */
        $sales = Sale::query()->where('invoice_id',$invoice->id)->get();
        session()->flash('success','Product Sale has store successfully complete');
        //return redirect()->back();
        return view('admin.invoice.health-product-invoice',compact('invoice','sales'));
    }




    public function addapplier(){
//        $this->checkpermission('PatientManagement/add-vaccine-applier');
        $patients = Patient::query()->groupBy('user_id')->get();
        return view('admin.patient.add-vaccine-applier',compact('patients'));
    }

    public function storeapplier(Request $request){
        $this->checkpermission('PatientManagement/store-vaccine-applier');
        $request->validate([
            'name' => 'required|unique:patients|max:255',
        ]);
        $pin = sprintf("%'04d", rand(0000,9999));

        $input=new User();
        $input->name=$request->name;
        $input->email=$request->email;
        $input->password=bcrypt('123456');
        $input->r_password='123456';
        $input->pin = $pin;
        $input->warehouse_id=Auth::User()->warehouse_id;

        $input->save();
        $id= $input->id;

        $data = $request->all();

        $data['user_id'] = $id;
        $patient =Patient::query()->create($data);

        $url = "{$input->id}@{$input->r_password}#{$input->pin}";

        $filename = Carbon::now()->format('Y-m-d').$id;
        QrCode::generate($url, 'public/admin/user/'.$filename.'.svg');


        $user = User::query()->findOrFail($id);
        $user->qr = $filename;
        $user->save();

//       Patient::create($request->all());
        $data = [];
        $data['complete'] = 'done';
        return redirect()->route('applier.add');
    }
    public function editapplier($id){
        $patient = Patient::find($id);
        return view('admin.patient.edit-vaccine-applier',compact('patient'));
    }
    public function updateapplier(Request $request){
        $this->checkpermission('PatientManagement/update-applier');
        $update = Patient::find($request->id);
        $update->update($request->all());
        session()->flash('success','Vaccine Appliers has succesfully updated');
        return redirect()->route('applier.add');
    }

//    Bulk Vaccine sale interface
    public function bulkSellVaccine(){
       // $this->checkpermission('PatientManagement/sell-bulk-vaccine');
        $customers = Patient::query()->pluck('name','id');
//        $products =Purchase::query()->where('product_type','other')->groupBy('product_id')->get();
        $products =Product::query()->where('product_type','vaccine')->pluck('name','id');

        return view('admin.patient.bulk-sell-vaccine',compact('products','customers'));
    }
//    product (vaccine) stock find

    public function product_stock_find(Request $request)
    {
        $info =  Purchase::query()->where('product_id',$request->id)->latest()->first();
//        dd($info);

        $purchased = Purchase::query()->where('warehouse_id',Auth::user()->warehouse_id)->where('product_type','vaccine')->where('product_id',$request->id)->sum('qty');
        $sold = Sale::query()->where('from_warehouse_id',Auth::user()->warehouse_id)->where('product_type','vaccine')->where('product_id',$request->id)->sum('qty');
        $stock = $purchased-$sold;
        

        if($stock<=0){
            return 0;
        }

        $data = [];
        $data["id"]= $info->id;
        $data["price"]= $info->mrp;
        $data["stock"]= $stock;

        return response()->json($data);
    }



//    Bulk Vaccine sale store
    public function bulk_vaccine_sale_store(Request $request){

        if(empty($request->customer_id) or $request->customer_id==0){
            $this->validate($request,[
                'customer_name'=>'required',
                'phone'=>'required|unique:patients',
            ]);
        }

        $sale_date = ($request->custom_date !=null ? date("Y-m-d",strtotime($request->custom_date))." ".Carbon::now()->format('h:i:s') : Carbon::now()->format('Y-m-d'));

        $customer = Patient::find($request->customer_id);
        if(!$customer){
            /* customer add Start */
            $customer = new Patient();
            $customer->name = $request->customer_name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->save();
            $customer_id = $customer->id;

            /* customer add End */
        }else{
            $customer_id = $request->customer_id;
        }

        /* invoice create start */

        $invoice = new Invoice();
        if($request->payment_type =="bkash"){
            $invoice->trxId = $request->trxId;
        }
        else if($request->payment_type =="rocket"){
            $invoice->trxId = $request->trxId;
        }
        else if($request->payment_type =="check"){
            $invoice->trxId = $request->trxId;
        }else{
            $invoice->trxId = "none";
        }

        $inv_serial = substr(md5(time()),0,6);
        $invoice->invoice_no = Date('Y-m-d')."_".$inv_serial;
        $invoice->patient_id = $customer_id;
        $invoice->total = $request->total_amount;
        $invoice->discount = $request->total_discount;
        $invoice->payment_type = $request->payment_type;
        $invoice->note = $request->sale_note;
        $invoice->product_type = $request->product_type;
        $invoice->warehouse_id = Auth::user()->warehouse_id;
        $invoice->user_id = Auth::user()->id;
        $invoice->custom_date = $sale_date;
        $invoice->save();

        /* invoice create End */

        /* purchase table data insert start */
        foreach(Cart::content() as $item){
//            dd($item);
            if(Auth::user()->id == $item->options->user_id){
                $sale = new Sale();
                $sale->from_warehouse_id = Auth::user()->warehouse_id;
//                $sale->user_id = $item->options->user_id;
                $sale->invoice_id = $invoice->id;
                $sale->product_id = $item->id;
                $sale->product_type = $request->product_type;
                $sale->qty = $item->qty;
                $sale->price = $item->price;
                $sale->custom_date = $sale_date;
                $sale->save();
            }
        }

        /* cashbook data insert start*/

        $cashbook = new CashBook;
        $cashbook->invoice_id = $invoice->id;
        $cashbook->income = $request->total_paid;
        $cashbook->save();

        /* Cart Destroy according to Warehouse start */

        foreach(Cart::content() as $item) {
            if (Auth::user()->id == $item->options->user_id) {
                Cart::destroy();
            }
        }

        /* Cart Destroy according to Warehouse end */
        // $sales = Sale::query()->where('invoice_id',$invoice->id)->get();
        //dd($sales);
        session()->flash('success','Product Sale has store successfully complete');
        //return redirect()->back();

        $i=0;
        $total = 0;
        $applied = Sale::groupBy('patient_id')->get();
        // dd($qr);
        $invoice = Invoice::find($invoice->id);
        if($invoice->purchases->first()){
            $sales = Purchase::query()->where('invoice_id',$invoice->id)->get();
        }else{
            $sales = Sale::query()->where('invoice_id',$invoice->id)->get();
        }

        return view('admin.invoice.print-vaccineinvoice',compact('invoice','i','sales','total','applied'));

      //  return view('admin.invoice.bulk-vaccine-invoice',compact('invoice','sales'));
    }

    /* Pending List Start */
    public function storePendingSale(Request $request){
        $this->validate($request,[
            'product_id'=>"required",
            'price'=>"required",
            'doss'=>"required",
        ]);

        if(Cart::count()>0){
            foreach (Cart::content() as $info){
                if($info->id == $request->product_id && $info->options->doss == $request->doss){
                    return response(['exit'=>1]);
                }
            }
        }

        /* if this id doss not added then add to cart list start */
        Cart::add([
            'id'=> $request->product_id,
            'name'=> Product::findOrfail($request->product_id)->name,
            'price'=>$request->price,
            'qty'=>1,
            'options'=>[
                'user_id'=>Auth::user()->id,
                'doss'=>$request->doss,
                'saleType'=>1
            ]
        ]);
        return response(['exit'=>0]);
        /* if this id doss not added then add to cart list end */
    }

    public function pendingProduct(){
        $sl = 0;
        $html='';
        $total = 0;
        foreach (Cart::content() as $key=>$info){
            if($info->options->saleType == 1){
                $total+=$info->price;
                $route = route('itemRemoveFromPendingList');
                $html.='<tr>
                            <td>'.++$sl.'</td>
                            <td>'.Product::findOrfail($info->id)->name.'</td>
                            <td>'.$info->price.'</td>
                            <td>'.$info->options->doss.'</td>
                            <td>'.$info->qty.'</td>
                            <td>
                                <button type="button" id="pendingSaleRemove" data-url="'.$route.'" data-id="'.$info->rowId.'" class="btn btn-danger fa fa-trash erase"></button>
                            </td>
                    </tr>
                    <script> $("#total_amount").val('.$total.');</script>';

            }
        }
        return $html;
    }
    /* Pending List End */

    public function removeItemFromPendingList(Request $request){
        $rowId = $request->id;
        foreach (Cart::content() as $info){
            if($info->rowId == $rowId && $info->options->user_id == Auth::user()->id){
                Cart::remove($rowId);
            }
        }
       echo  $this->pendingProduct();
    }
}