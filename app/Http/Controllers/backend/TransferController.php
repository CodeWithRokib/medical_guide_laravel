<?php

namespace App\Http\Controllers\backend;
use App\Product;
use App\Models\Invoice;
use App\ProductTransfer;
use App\Models\Purchase;
use App\Models\Sale;
use App\Warehouse;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function index(){
        $this->checkpermission('TransferManagement/vaccine-transfer');
        $stock=0;
        $transfers = ProductTransfer::orderBy('id','desc')->get();
        $products= Product::query()->orderBy('name')->pluck('name','id');
        $warehouse = Warehouse::query()->pluck('name','id');

        return view('admin.stocktransfer.vaccine-transfer',compact('warehouse','transfers','products'));
    }

    public function edit($id)
    {
        $warehouse_id = Auth::user()->warehouse_id;
        $transfer = ProductTransfer::query()->findOrFail($id);
        $warehouse = Warehouse::query()->where('id','!=',$warehouse_id)->pluck('name','id');
        return view('admin.stocktransfer.edit-vaccine-transfer',compact('transfer','warehouse'));
    }

    public function load_products()
    {
        $html="<option>Select Product</option>";
        $warehouse_id = Auth::user()->warehouse_id;
        $purchases = Purchase::query()
            ->where('warehouse_id',$warehouse_id)
            ->groupBy('product_id')->get();
//        foreach ($purchases as $purchase) {
//            $purchased = Purchase::query()
//                ->where('warehouse_id', $warehouse_id)
//                ->where('product_id', $purchase->product->id)
//                ->sum('qty');
//            $sold = Sale::query()
//                ->where('from_warehouse_id', $warehouse_id)
//                ->where('product_id', $purchase->product->id)
//                ->sum('qty');
//            $total = $purchased-$sold;
//            if($total>0){
//                $html.="<option value='{$purchase->product->id}'>{$purchase->product->name}</option>";
//            }
//        }
        return $html;
    }

    public function story()
    {

        $transfers = ProductTransfer::all();
        $html = '';
        $html.='<table border="1"> <tr> <th>SL</th> <th>From Warehouse </th> <th>To Warehouse</th> <th> Product</th> <th>Qty</th> <th> Date </th>  <th>Created Date </th>  </tr>';
        $sl =0;
        foreach ($transfers as $info){
            $html.='<tr>';
            $html.=' <td>'.++$sl.'</td> <td style="padding: 5px;background: #159F5C;color: #fff;text-align: center"> '
                .Warehouse::findOrFail($info->from_warehouse_id)->name." -- ".$info->from_warehouse_id.
                '</td>
                <td style="padding: 5px;background: #E338B2;color: #fff;text-align: center"> '
                .Warehouse::findOrFail($info->to_warehouse_id)->name
                ." -- ".$info->to_warehouse_id.'</td> 
                <td> '.Product::findOrFail($info->product_id)->name." -- ( ".$info->product_id." )".' </td> 
                <td> '.$info->qty.' </td> 
                <td> '.$info->date.' </td> 
                <td> '.$info->created_at.' </td> ';
            $html.='</tr>';
        }
        $html.='</table>';
        echo $html;
        echo '<hr>';
        $data = DB::select('SELECT p.warehouse_id as purchase_warehouse_id,
                    pt.to_warehouse_id as transfered_to_as_purchased_warehouse,
                    pt.from_warehouse_id as sale_from_warehouse_id,
                    p.product_id as purchase_product_id,
                    pt.product_id as transfered_product_id,
                    p.qty as purchase_quantity, 
                    pt.qty as transfered_product_qty, 
                    p.created_at , 
                    pt.created_at product_transfer_created_at ,
                    p.custom_date,
                    pt.date
     FROM `purchases` as p,product_transfers as pt WHERE p.created_at = pt.created_at');
        $sl1 = 0;
        echo '<table border="1"> 
                <tr>
                    <th style="padding: 5px;"> SL </th> 
                    <th style="padding: 5px;"> Purchase Warehouse </th>
                    <th style="padding: 5px;"> Transfer from </th>
                    <th style="padding: 5px;"> Sale From </th>
                    <th style="padding: 5px;"> Purchase Product id</th>
                    <th style="padding: 5px;"> Transfer Product id</th>
                    <th style="padding: 5px;"> Purchase Qty</th>
                    <th style="padding: 5px;"> Transfer Qty</th>
                    <th style="padding: 5px;"> Created at</th>
                    <th style="padding: 5px;"> Transfer Created at</th>
                    <th style="padding: 5px;"> Custom Date</th>
                    <th style="padding: 5px;">Date</th>
                </tr>';

        foreach ($data as $in){
            echo '<tr> 
                    <td style="padding:5px; text-align: center;">'.++$sl1.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->purchase_warehouse_id.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->transfered_to_as_purchased_warehouse.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->sale_from_warehouse_id.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->purchase_product_id.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->transfered_product_id.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->purchase_quantity.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->transfered_product_qty.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->created_at.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->product_transfer_created_at.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->custom_date.'</td>
                    <td style="padding:5px; text-align: center;">'.$in->date.'</td>
                 </tr>';
        }
        echo '</table>';

    }

    public function load_qty(Request $request)
    {
        $purchased = Purchase::query()
            ->where('warehouse_id', $request->warehouse_id)
            ->where('product_id', $request->product_id)
            ->sum('qty');

        $sold = Sale::query()
            ->where('from_warehouse_id', $request->warehouse_id)
            ->where('product_id', $request->product_id)
            ->sum('qty');

        $total = $purchased-$sold;
        $product_type = Product::query()->findOrFail($request->product_id)->product_type;
        return [$total,$product_type];
    }

    public function transfer_product(Request $request)
    {


        $pur = Purchase::where('warehouse_id',$request->from_warehouse_id)->where('product_id',$request->product_id)->first();

        $data =$request->all();
        $data['user_id'] = Auth::user()->id;
        $transfer_product = ProductTransfer::query()->create($data);

        $custom_date = ($request->date !=null ? date("Y-m-d",strtotime($request->date))." ".Carbon::now()->format('h:i:s') : Carbon::now()->format(' Y-m-d'));
//        return $transfer_product;

        /* invoice create start */
        $invoice_save = $request->all();
        $inv_serial = substr(md5(time()),0,6);
        $invoice_save['invoice_no'] = Date('Y-m-d')."_".$inv_serial;
        $invoice_save['warehouse_id'] = $request->from_warehouse_id;
        $invoice_save['user_id'] = Auth::user()->id;
        $invoice_save['product_type'] = $request->product_type;
        $invoice_save['custom_date'] = $custom_date;
        $invoice_save['total'] = $transfer_product->product->price*$request->qty;
        $invoice_last_insert_id = Invoice::create($invoice_save);
        /* invoice create End */

        /* sales table data insert start */
        $sale = new Sale();
        $sale->invoice_id = $invoice_last_insert_id->id;
        $sale->from_warehouse_id = $request->from_warehouse_id;
        $sale->to_warehouse_id = $request->to_warehouse_id;
        $sale->product_id = $request->product_id;
        $sale->qty = $request->qty;
        $sale->product_type = $request->product_type;
        $sale->price = $pur->price;
        $sale->custom_date = $custom_date;
        $sale->save();
        /* sales table data insert end */

        /* invoice create start */
        $invoice_save = $request->all();
        $inv_serial = substr(md5(time()),0,6);
        $invoice_save['invoice_no'] = Date('Y-m-d')."_".$inv_serial;
        $invoice_save['warehouse_id'] = Auth::user()->warehouse_id;
        $invoice_save['user_id'] = Auth::user()->id;
        $invoice_save['product_type'] = $request->product_type;
        $invoice_save['total'] = $transfer_product->product->price*$request->qty;
        $invoice_save['custom_date'] = $custom_date;
        $purchase_invoice = Invoice::create($invoice_save);
        /* invoice create End */

        /* purchase table data insert start */
        $purchase = new Purchase();
        $purchase->warehouse_id = $request->to_warehouse_id;
        $purchase->user_id = Auth::user()->id;
        $purchase->invoice_id = $purchase_invoice->id;
        $purchase->product_id = $request->product_id;
        $purchase->qty = $request->qty;
        $purchase->product_type = $request->product_type;
        $purchase->price = $pur->price;
        $purchase->mrp = $pur->price;
        $purchase->custom_date = $custom_date;
        $purchase->save();
        /* purchase table data insert end */




//        /* script start for invoice print start */
//        $url =  route('invoice.vaccinepurchase',$invoice_last_insert_id->id);
//        echo '<script>
//                setTimeout(function() {
//                  window.location.href = "https://facebook.com";
//                }, 3000);
//            </script>';
//        /* script end for invoice print end */
        return json_encode(['success'=>1]);
//        return redirect()->route('vaccine.transfer');


    }

    public function transferHistory(){
        $this->checkpermission('TransferManagement/vaccine-transfer-history');
        $warehouse = Warehouse::pluck('name','id');

        /*$purchses = Purchase::whereNull('company_id')->get();
        foreach ($purchses as $info){
            echo '<p style="background: #60339A;color: #fff;padding:5px;">Invoice id : '.$info->invoice_id.' -- Invoice No : '.$info->invoice->invoice_no.' QTY = '.$info->qty.' -- Warehouse : '.$info->warehouse->name.'</p>';
        }*/

        return view('admin.stocktransfer.vaccine-transfer-history',compact('warehouse'));
    }

    public function showTransferHistory(Request $request)
    {
        $from = Carbon::parse($request->start)->format('Y-m-d');
        $to= Carbon::parse($request->end)->format('Y-m-d');
//        return $to;
        $transfers = ProductTransfer::query()
            ->where('to_warehouse_id',$request->to_warehouse)
            ->where('from_warehouse_id',$request->from_warehouse)
            ->whereBetween('date',[$from,$to])
            ->get();
        $html="";
        foreach ($transfers as $transfer) {
            $html.="
                <tr>
                    <td>{$transfer->from_warehouse->name}</td>
                    <td>{$transfer->to_warehouse->name}</td>
                    <td>{$transfer->product->name}</td>
                    <td>{$transfer->qty}</td>
                    <td>{$transfer->description}</td>
                    <td>{$transfer->user->name}</td>
                </tr>
            ";
        }
        return $html;
    }
}
