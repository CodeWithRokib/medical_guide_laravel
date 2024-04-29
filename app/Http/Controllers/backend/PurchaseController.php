<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Dieseas;
use App\Company;
use App\Supplier;
use App\Warehouse;
use Cart;
use App\Models\Purchase;
use App\Models\Invoice;
use App\CashBook;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DB;

class PurchaseController extends Controller
{

    public function index()
    {
        $this->checkpermission('PurchaseManagement/view-purchase');
        $warehouse = Warehouse::pluck('name','id');
        $company = Company::pluck('name','id');
        $dieseas = Dieseas::pluck('name','id');
        $supplier = Supplier::pluck('name','id');
        
        $product = Product::query()->where('product_type','vaccine')->pluck('name','id');

        return view('admin.purchase.add-purchase',compact('company','dieseas','warehouse','supplier','product'));
    }

    public function productaddcart(Request $request){
        $product = Product::find($request->id);
//        return $request->all();
        $c =Cart::add([
            'id'=> $request->id,
            'name'=> $product->name,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'options'=>[
                'bonus'=>$request->bonus,
                'dieseas_id'=>$request->dieseas_id,
                'company_id'=>$request->company_id,
                'user_id'=>Auth::user()->id,
                'mrp' => $request->mrp,
                'product_type' => $request->product_type
            ]
        ]);
//        dd($c);
        echo $this->Carts();
    }


    /* show cart data */

    public function Carts()
    {
        //Cart::destroy();
        $cart_info = Cart::content();
        $i=0;
        $total = 0;
//        dd($cart_info);

        if(Cart::count() != 0){

            foreach($cart_info as $cart_details){
                if ($cart_details->options->saleType !=1){
                    $sub = $cart_details->price*$cart_details->qty;
                    $total = $total+ $sub;

                    echo '<tr>
                        <td>'.++$i.'</td>
                        <td>'.$cart_details->name.'</td>
                        <td>'. Company::findOrFail($cart_details->options->company_id)->name.'</td>
                        <td>'.$cart_details->qty.' + '.$cart_details->options->bonus.'</td>
                        <td> 
                            '.$cart_details->price.'
                            <input type="hidden" name="mrp" value='.$cart_details->options->mrp.' />
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
        }
        else{
            echo '<tr><td colspan="6"><p class="bg-danger text-center" style="padding:8px 0"> No item found at Shopping-cart </p>';
        }

    }

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


    public function store(Request $request)
    {

        $this->checkpermission('PurchaseManagement/purchase');
       //dd(Cart::content());


       // dd($request->all());

        $purchase_date = ($request->custom_date !=null ? date("Y-m-d",strtotime($request->custom_date))." ".Carbon::now()->format('h:i:s') : Carbon::now()->format(' Y-m-d h:i:s'));

       /* supplier add start */
        $sup_id ='';
        if($request->payment_type !="cash" && $request->payment_type !=0){
            if($request->trxId == null){
                $this->validate($request,[
                     'trxId'=>'required',    
                ]);                
            }
        }

        if(empty($request->supplier_id) or $request->supplier_id==0){
            $this->validate($request,[
                'name'=>'required',
                'phone'=>'required|unique:suppliers',
                'image'=>'image|mimes:jpg,jpeg,png,gif,svg',
            ]);



            $supplier_save = $request->only(['name','phone','address']);
          //  dd($supplier_save);
            if($request->has('supplierimage')){
                $image = $request->file('supplierimage');
                $image_name = substr(md5(time()),0,6);
                $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
                $image->move(base_path('public/admin/supplier/'),$filename);
                $supplier_save['image']=$filename;
            }else{
                $filename = "dummy.png";
                $supplier_save['image']=$filename;
            }
            $supplier_save = Supplier::create($supplier_save);
            $sup_id = $supplier_save->id;

        }else{
            $sup_id = $request->supplier_id;
        }

       /* supplier add End */

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

        $invoice_save = $request->all();
        $inv_serial = substr(md5(time()),0,6);
        $invoice_save['invoice_no'] = Date('Y-m-d')."_".$inv_serial;
        $invoice_save['supplier_id'] = $sup_id;
        $invoice_save['warehouse_id'] = $request->warehouse;
        $invoice_save['user_id'] = Auth::user()->id;
        $invoice_save['custom_date'] = $purchase_date;
        $invoice_last_insert_id = Invoice::create($invoice_save);

       /* invoice create End */

       /* purchase table data insert start */

       foreach(Cart::content() as $item){
           if(Auth::user()->id == $item->options->user_id){
               $purchase = new Purchase;
               $purchase->warehouse_id = $request->warehouse;
               $purchase->user_id = $item->options->user_id;
               $purchase->invoice_id = $invoice_last_insert_id->id;
               $purchase->product_id = $item->id;
               $purchase->company_id = $item->options->company_id;
               $purchase->type = 1;
               $purchase->qty = $item->qty;
               $purchase->bonus = 0;
               $purchase->price = $item->price;
               $purchase->mrp = $item->options->mrp;
               $purchase->product_type = $request->product_type;
               $purchase->custom_date = $purchase_date;
               $purchase->save();

               /* bonus purchase start testing */
               if($item->options->bonus >0){
                   $bonus_purchase = new Purchase;
                   $bonus_purchase->warehouse_id = $request->warehouse;
                   $bonus_purchase->user_id = $item->options->user_id;
                   $bonus_purchase->invoice_id = $invoice_last_insert_id->id;
                   $bonus_purchase->product_id = $item->id;
                   $bonus_purchase->company_id = $item->options->company_id;
                   $bonus_purchase->type = 1;
                   $bonus_purchase->qty = $item->options->bonus;
                   $bonus_purchase->bonus = 0;
                   $bonus_purchase->price = 0;
                   $bonus_purchase->mrp = $item->options->mrp;
                   $bonus_purchase->product_type = $request->product_type;
                   $bonus_purchase->custom_date = $purchase_date;
                   $bonus_purchase->save();
               }

               /* bonus purchase ending testing */
           }
       }

       /* cashbook data insert start */

       $cashbook = new CashBook;
       $cashbook->invoice_id = $invoice_last_insert_id->id;
       $cashbook->expense = $request->total_paid;
       $cashbook->save();

       /* Cart Destroy according to Warehouse start */

        foreach(Cart::content() as $item) {
            if (Auth::user()->id == $item->options->user_id) {
                Cart::destroy();
            }
        }

        /* Cart Destroy according to Warehouse start */

        /* script start for invoice print start */

        session()->flash('success','Vaccine Purchase has store successfully complete');
       return redirect()->route('purchase.add');

       /* cashbook data insert end */
 }/* store end */

       /* purchase table data insert end */

   public function new_supplier($supplier_name,$phone,$supplierimage,$Supplier_address){

       /* store Supplier in Supplier table */
       $image = $supplierimage;
       $image_name = substr(md5(time()),0,6);
       $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
       $image->move(base_path('public/admin/supplier/'),$filename);

       $supplier = new Supplier();
       $supplier->name = $supplier_name;
       $supplier->phone = $phone;
       $supplier->image = $filename;
       $supplier->address = $Supplier_address;
       $supplier->save();

       echo $supplier->id;
   }


   /* purchase view start */

   public function view(){
       $purchases = Purchase::query()
//           ->where('warehouse_id',Auth::user()->warehouse_id)
           ->where('product_type','vaccine')
           ->orderByDesc('id')
           ->get();
       $permission_keys=[];
       foreach (Auth::user()->roles as $role){
           foreach ($role->permissions as $permission){
               array_push($permission_keys,url('/').'/'.$permission->permission_key);
           }
       }
       return view('admin.purchase.view-purchase',compact('purchases','permission_keys'));
   }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $id=$request->purchase_id;
        //return $request->all();
        try {
                // Begin database transaction
            DB::beginTransaction();
            if($id){
                
                $purchase=Purchase::find($id);
            //dd($purchase);
                $privious_total=$purchase->qty*$purchase->price;
                $updated_total=$request->qty*$request->price;
                $newTotal=($purchase->invoice->total - $privious_total +$updated_total);
                $purchase->qty=$request->qty;
                $purchase->price=$request->price;
                $purchase->invoice->total=$newTotal;

                $cashbook=CashBook::where('invoice_id',$purchase->invoice_id)->first();
                if($cashbook && $cashbook->expense>0){
                    $cashbook->expense=($cashbook->expense - $privious_total + $updated_total);
                    $cashbook->update();
                }
            
                $purchase->invoice->update();
                $purchase->update();
            }
            DB::commit();
            session()->flash('success','Vaccine Purchase has Updated successfully');
            return redirect()->back();
        } catch (\Exception $ex) {
            // Rollback transactions if any errors occured
            DB::rollBack();
            return redirect()->back()->withInput()->with('failed', $ex->getMessage());
        }
    }


    public function destroy($id)
    {
        //
    }
}
