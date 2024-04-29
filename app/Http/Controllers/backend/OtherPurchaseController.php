<?php

namespace App\Http\Controllers\backend;

use App\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Product;
use App\Dieseas;
use App\Company;
use App\Supplier;
use Cart;
use Auth;
use App\Models\Purchase;
use App\Models\Invoice;
use App\CashBook;


class OtherPurchaseController extends Controller
{
    public function index()
    {
        $this->checkpermission('PurchaseManagement/add-other-pro-purchase');
        $supplier = Supplier::all();
        $warehouse = Warehouse::query()->pluck('name','id');
        $product = Product::query()->where('product_type','other')->pluck('name','id');
        
        return view('admin.purchase.add-otherpurchase',compact('warehouse','product','supplier'));
    }

    /* add to bucket */

    public function productaddcart(Request $request){
        $product = Product::find($request->id);

        Cart::add([
            'id'=> $request->id,
            'name'=> $product->name,
            'price'=>$request->product_price,
            'qty'=>$request->qty,
            'options'=>[
                'user_id'=>Auth::user()->id,
                'mrp' => $request->mrp
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
    /* Cart Remove and Add End */


    /* purchase store start */

    public function store(Request $request){
    /* supplier add start */
    $sup_id ='';
//        dd($request->all());

    if(empty($request->supplier_id) or $request->supplier_id==0){
        $this->validate($request,[
            'supplier_name'=>'required',
            'phone'=>'required|unique:suppliers',
            'supplierimage'=>'image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        if($request->has('supplierimage')){
            $image = $request->file('supplierimage');
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/supplier/'),$filename);
        }else{
            $filename = "dummy.png";
        }

        $supplier = new Supplier();
        $supplier->name = $request->supplier_name;
        $supplier->phone = $request->phone;
        $supplier->image = $filename;
        $supplier->address = $request->Supplier_address;
        $supplier->save();
        $sup_id = $supplier->id;

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

    $inv_serial = substr(md5(time()),0,6);
    $invoice->invoice_no = Date('Y-m-d')."_".$inv_serial;
    $invoice->supplier_id = $sup_id;
    $invoice->total = $request->total_amount;
    $invoice->discount = $request->total_discount;
    $invoice->payment_type = $request->payment_type;
    $invoice->product_type = $request->product_type;
    $invoice->note = $request->sale_note;
    $invoice->warehouse_id = Auth::user()->warehouse_id;
    $invoice->user_id = Auth::user()->id;
    $invoice->save();

    /* invoice create End */

    /* purchase table data insert start */
//    dd(Cart::content());
    foreach(Cart::content() as $item){
//        dd();
        if(Auth::user()->id == $item->options->user_id){
            $purchase = new Purchase;
            $purchase->warehouse_id = Auth::user()->warehouse_id;
            $purchase->user_id = $item->options->user_id;
            $purchase->invoice_id = $invoice->id;
            $purchase->product_id = $item->id;
            $purchase->type = 1;
            $purchase->qty = $item->qty;
            $purchase->price = $item->price;
            $purchase->mrp = $item->options->mrp;
            $purchase->product_type = $request->product_type;
            $purchase->save();
        }
    }

    /* cashbook data insert start */

    $cashbook = new CashBook;
    $cashbook->invoice_id = $invoice->id;
    $cashbook->expense = $request->total_paid;
    $cashbook->save();

    /* Cart Destroy according to Warehouse start */

    foreach(Cart::content() as $item) {
        if (Auth::user()->id == $item->options->user_id) {
            Cart::destroy();
        }
    }

    /* Cart Destroy according to Warehouse start */

    session()->flash('success','Product Purchase has store successfully complete');
    return redirect()->route('otherpurchase.add');

    /* cashbook data insert end */
}

    /* Purchase close */


    /* Purchase history view Start */

    public function view(){
        $this->checkpermission('PurchaseManagement/view-other-product-purchase');
        $purchases = Purchase::where("company_id",NULL)->whereHas('product', function($q){
            $q->where('product_type','!=','vaccine');
        })->get();
        
             return view('admin.purchase.view-purchase',compact('purchases'));
             //return view('admin.purchase.view-otherpurchase',compact('purchases'));
    }

    /* Purchase History View End */

    public function otherpurapi(){
        $onlypurchased = Purchase::all();
        $product = [];
        foreach ($onlypurchased as $key=>$purchase  ){
            if($purchase->product->dieseas_id == NULL){
                $product[$key]["id"]=$purchase->product->id;
                $product[$key]["name"]=$purchase->product->name;
                $product[$key]["price"]=$purchase->product->price;
                $product[$key]["image"]=$purchase->product->image;
                $product[$key]["imagepath"]= url("public/admin/product/upload/".$purchase->product->image);
                $product[$key]["description"]= $purchase->product->description;
            }
        }
        return response()->json(["otherproduct"=>$product]);
    }

}
