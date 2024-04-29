<?php

namespace App\Http\Controllers\backend;

use App\CashBook;
use App\Models\Purchase;
use App\Models\Sale;
use App\User;
use App\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Auth;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Invoice update process start */
    public function updateI(){

        /*$invioces = Invoice::all();

        foreach ($invioces as $info){
            if($info->custom_date !=null){
                $date = date("Y-m-d",strtotime($info->custom_date));
                Invoice::findOrFail($info->id)->update(["custom_date"=>$date]);
                echo " Invoice Update when custom date not null : invoice-id = ".$info->id." Updated Data is : ".$date." -  Old data is :".$info->custom_date."<br>";
            }else{
                Invoice::findOrFail($info->id)->update(["custom_date"=>$info->created_at]);
                echo " Invoice Update when custom date is null : invoice-id = ".$info->id." Updated Data is : ".$info->created_at."<br>";
            }
        }

        $purchases = Purchase::all();

        foreach ($purchases as $info){
            if($info->custom_date !=null){
                $date = date("Y-m-d",strtotime($info->custom_date));
                Purchase::findOrFail($info->id)->update(["custom_date"=>$date]);
                echo " Purchse Update when custom date not null : Purchse-id = ".$info->id." Updated Data is : ".$date." -  Old data is :".$info->custom_date."<br>";
            }else{
                Purchase::findOrFail($info->id)->update(["custom_date"=>$info->created_at]);
                echo " purchase Update when custom date is null : purchase-id = ".$info->id." Updated Data is : ".$info->created_at."<br>";
            }
        }
*/
        $sales = Sale::all();

        foreach ($sales as $SaleInfo){
            echo 'Sale ID : '.$SaleInfo->id." Created at : ".$SaleInfo->created_at." *** Custom Date : ".$SaleInfo->custom_date."<br>";
            if($SaleInfo->custom_date !=null)
            {

                $date = date("Y-m-d",strtotime($SaleInfo->custom_date));
                $update = "UPDATE sales SET custom_date='".$date."' WHERE id=".$SaleInfo->id;
                DB::update($update);

                echo " Sale Update when custom date not null : Sale-id = ".$SaleInfo->id." Updated Data is : ".$date." -  Old data is :".$SaleInfo->custom_date."<br>";
            }
            else
            {
                $update = "UPDATE sales SET custom_date='".$SaleInfo->created_at."' WHERE id=".$SaleInfo->id;
                DB::update($update);
                echo " Sale Update when custom date is null : Sale-id = ".$SaleInfo->id." Updated Data is : ".$SaleInfo->created_at."<br>";
            }
        }

    }
    /* update process end */

    public function index(){
        $this->checkpermission('InvoiceManagement/all-purchase-report');
        $warehouses = Warehouse::pluck('name','id');
        $invoices = Invoice::where('warehouse_id',Auth::user()->warehouse_id)->where("supplier_id","!=",null)->get();
        return view('admin.invoice.purchase-invoice',compact('invoices','warehouses'));
    }

    public function vaccineinvoice($id){
        $i=0;
        $total = 0;
        $applied = Sale::groupBy('patient_id')->get();
       // dd($qr);
        $invoice = Invoice::find($id);
        if($invoice->purchases->first()){
            $sales = Purchase::query()->where('invoice_id',$id)->get();
        }else{
            $sales = Sale::query()->where('invoice_id',$id)->get();
        }
        
        
        return view('admin.invoice.print-vaccineinvoice',compact('invoice','i','sales','total','applied'));
    }



    public function sellinvoice(){
        $i = 0;
        $total = 0;
        $applied = Sale::groupBy('patient_id')->get();
        //$qr = User::find($id);
        $invoice = Invoice::find($id);
        $sales = Sale::query()->where('invoice_id',$id)->get();
        return view('admin.invoice.sell-invoice',compact('invoice','i','sales','total','applied','qr'));
    }

    public function duepayment(Request $request){
            $this->validate($request,[
                'amount'=>'required'
            ]);

            $is_supplier = Invoice::query()->findOrFail($request->invoice_id);
            if($is_supplier->supplier_id){
                $update = new CashBook();
                $update->invoice_id =  $request->invoice_id;
                $update->expense = $request->amount;
                $update->save();
                echo '{"success":"yes"}';
            }else{
                $update = new CashBook();
                $update->invoice_id =  $request->invoice_id;
                $update->income = $request->amount;
             //   $update->trxId = $request->trxId;
                $update->save();
                echo '{"success":"yes"}';
            }

    }
    
    public function testing(){
        if(isset($_POST['name'])){
            echo $_POST['name'];
        }else{
            echo "ha du du ?";
        }
    }

    public function moneyreceipt(){
        $this->checkpermission('InvoiceManagement/money-receipt');
        $invoices = Invoice::orderBy('id','desc')->get();
        return view('admin.invoice.money',compact('invoices'));
    }

    public function CashPaidList(Request $request){
        $invoice_info = Invoice::find($request->id);
        $invoice_id = CashBook::where('invoice_id',$invoice_info->id)->get();
        $i=0;
        $total = 0;
        foreach ($invoice_id as $inv){
            $total=$total+$inv->expense;
            echo '<tr>
                        <td>'.++$i.'</td>
                        <td>'.$invoice_info->invoice_no.'</td>
                        <td>'.$invoice_info->total.'</td>
                        <td>'.$invoice_info->discount.'</td>
                        <td>'.$inv->expense.'</td>
                        <td>'.$inv->created_at.'</td>
                        <td>'.($invoice_info->total-$total).'</td>
                        <td><a href="'.url("/InvoiceManagement/money-receipt-print/".$inv->id).'" target="_blank" class="fa fa-print btn btn-primary" data-id="'.$inv->id.'" data-invoice="'.$inv->invoice_id.'"></a></td>
                    </tr>';
        }
    }

    /* Cash Paid List End */

    /* Paid History Money Receipt Print */

    public function moneyreceiptprint($id){
        $invoice = CashBook::findOrFail($id);
        return view('admin.invoice.money-receipt',compact('invoice'));
    }

    /* Paid History Money Receipt Print */

    public function all_purchase_report(){
        $purchases = Purchase::all();
        return view('admin.invoice.all-purchase',compact('purchases'));
    }

    /* purchase or sale report according to warehouse report start */

    public function purchase_warehouse_report(Request $request){ //Faisal

        if($request->report_type == 1){
//            dd($request->all());
            /*Purchase start */
            ($request->product_type == 'vaccine') ? ($invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type','vaccine')->where('patient_id',null)->orderByDesc('id')->get()):($invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type','other')->where('patient_id',null)->orderByDesc('id')->get());
            /*Purchase end */
        }

        if($request->report_type == 2){
            /*Sale start */
            ($request->product_type == 'vaccine')?($invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type','vaccine')->where('patient_id','!=',null)->orderByDesc('id')->get()):($invoices = Invoice::query()->where('warehouse_id',$request->warehouse_id)->where('product_type','other')->where('patient_id','!=',null)->orderByDesc('id')->get());
            /*Sale end */
        }

        $data = [];
        $sl=0;
        foreach($invoices as $index=>$info){
            $data[$index]["sl"]=++$sl;
            $data[$index]["invoice_no"]=$info->invoice_no;
            $data[$index]['name']= ($info->supplier_id !=null ? $info->supplier['name'] : $info->patient['name']);
            $data[$index]['phone']= ($info->supplier_id !=null ? $info->supplier['phone'] : $info->patient['phone']);
            $data[$index]['type']= ($info->supplier_id !=null ? 1 : 2);
        }

       // return json_encode($data);


        return view('admin.invoice.ajax-invoice',compact('invoices'));
    }

    /* Purchase or sale report according to warehouse report end */



    public function dueinvoice(){
        $this->checkpermission('InvoiceManagement/dueinvoice');
        $warehouses = Warehouse::pluck('name','id');
        return view("admin.invoice.due-invoice",compact('warehouses'));
    }

    /* All Dues Show Start */

    public function all_dues(){
        $invoices = Invoice::all();
        return view('admin.invoice.ajax-due-invoices',compact('invoices'));
    }

    /* All Dues Show End */

    /*Partial Payment Start*/
    public function partial_payment(Request $request){

        $invoices = CashBook::query()->where('invoice_id',$request->id)->get();
        return view('admin.invoice.ajax-partial-payment',compact('invoices'));
    }
    /*Partial Payment End*/

    /* Due Invoice Type SHow */
    public function dueinvoicestype(Request $request){
        // dd($request->all());
        $warehouse_id = $request->warehouse_id;
        if($request->report_type == 1){
            /*Purchase start */
//            $invoices = Invoice::wherewarehouse_id($warehouse_id)->whereNotNull('supplier_id')->get();
            ($request->product_type == 'vaccine')?($invoices = Invoice::query()->where('warehouse_id',$warehouse_id)->where('product_type','vaccine')->whereNotNull('supplier_id')->get()):($invoices = Invoice::query()->where('warehouse_id',$warehouse_id)->where('product_type','other')->whereNotNull('supplier_id')->get());
            return view('admin.invoice.ajax-due-invoices',compact('invoices'));
            /*Purchase end */
        }

        if($request->report_type == 2){
            /*Sale start */
            $invoices = Invoice::wherewarehouse_id($warehouse_id)->whereNotNull('patient_id')->get();

            ($request->product_type == 'vaccine')?($invoices = Invoice::query()->where('warehouse_id',$warehouse_id)->where('product_type','vaccine')->whereNotNull('patient_id')->get()):($invoices = Invoice::query()->where('warehouse_id',$warehouse_id)->where('product_type','other')->whereNotNull('patient_id')->get());

            return view('admin.invoice.ajax-due-invoices',compact('invoices'));
            /*Sale end */
        }
    }
    /* Due Invoice Type End */






    public function corporateclients(){
        $invoices = Invoice::where('customer_type',1)->get();

        $corporate = [];
        $data=[];
        foreach ($invoices as $key=>$invo){
            $data[$key]['name']=$invo->patient->name;
            $data[$key]['father']=$invo->patient->father;
            $data[$key]['mother']=$invo->patient->mother;
            $data[$key]['phone']=$invo->patient->phone;
        }
        
        $corporate['corporate'] = $data;
        return $corporate;

        
    }


    public function editInvoice($id){
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoice.edit-invoice',compact('invoice'));
    }

    public function updateInvoice(Request $request,$id){
        $this->validate($request,[
            'qty'=>'required',
            'price'=>'required',
            'product_id'=>'required',
        ]);
        $total=0;

        foreach ($request->product_id as $key=>$info){
            $qty = $request->qty[$key];
            $price = $request->price[$key];
            Purchase::where('invoice_id',$id)->where('product_id',$request->product_id[$key])->update(['qty'=>$qty,'price'=>$price]);
            $total+=($price*$qty);
            //echo 'Product ID : '.$info." -- Qty : ".$request->qty[$key]." -- Price : ".$request->price[$key]." -- Sub Total : ".($price*$qty)."<br>";
        }
        Invoice::findOrFail($id)->update(['total'=>$total]);
        session()->flash('success','Invoice Edited successfully complete');
        return redirect()->route('invoice.edit',$id);

    }

}
