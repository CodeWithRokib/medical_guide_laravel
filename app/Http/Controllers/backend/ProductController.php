<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dieseas;
use App\Http\Requests\ProductRequest;
use App\Models\DurationVaccine;
use App\Models\VaccineOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->checkpermission('ProductManagement/vaccine');
        $vaccines = Product::query()->where('product_type','vaccine')->get();

        return view('admin.product.add-product',compact('vaccines'));
    }

    public function productOrderList()
    {
        $this->checkpermission('ProductManagement/vaccine');
        $vaccinesOrders = VaccineOrder::orderBy('id','desc')->get();

        return view('admin.product.product-order',compact('vaccinesOrders'));
    }


    public function store(Request $request)
    {

        $this->validate($request,[
           // 'name' => ['required',Rule::unique('products')->ignore($request->id)],
            'name' => 'required|unique:products',
            'price'=>'required',
            'from'=>'required',
            'to'=>'required',
            'gender'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png'
        ]);

        $data = $request->except('image');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data['image']= $filename;
        }

        Product::query()->create($data);
        session()->flash('success','Vaccine saved');
        return redirect()->route('product.add');

    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit-product',compact('product'));
    }


    public function update(Request $request)
    {
        $this->checkpermission('ProductManagement/update');
        $this->validate($request,[
            'name' => [ 'required', Rule::unique('products')->ignore($request->id)],
        ]);

        $product = Product::find($request->id);

        /* image remove */


        if( $request->hasFile('image'))
        {
            /* old image unlink start */
            if($product->image!=null){
                $path = 'public/admin/product/upload/'.$product->image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            /* old image unlink end */
            $image = $request->file('image');
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            //$product->image = $filename;

            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data = $request->except('image');
            $data['image'] = $filename;
            $product->update($data);
        }else{
            $product->update($request->except('image'));
        }

        session()->flash('success','Vaccine update');
        return redirect()->route('product.add');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('ProductManagement/erase');
        /* Image Unlink Start */
        $img_path = Product::find($request->id);
       // dd($img_path->image);

        if($img_path->image!=null){
            $path = 'public/admin/product/upload/'.$img_path->image;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        /* Image Unlink Start */
        $img_path->delete();
    }


    public function findproduct(Request $request){
        $vaccine = Dieseas::find($request->dieseas_id);
        echo '<option value="0">SELECT VACCINE / PRODUCT </option>';
        foreach($vaccine->products as $pro){
            echo '<option value="'.$pro->id.'">'.$pro->name.'</option>';
        }
    }


    public function productlist()
    {
        $warehouse_id = Auth::user()->warehouse_id;
        $purchases = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_type','vaccine')->groupBy('product_id')->get();
        $html="<option>Select Vaccine</option>";
        foreach ($purchases as $purchase){
            $purchased = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
            $sold = Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
            $stock = $purchased-$sold;
            if($stock>0){
                $html.="<option value='{$purchase->product->id}'>{$purchase->product->name}</option>";
            }
        }
        return $html;
    }




    public function findproductvalue(Request $request){
        $vaccine = Product::where('id',$request->product)->first();
//        echo '{"price":'.$vaccine->price.'}';
        return [$vaccine->price,$vaccine->mrp];
    }

    public function androidapi($id){
        $vaccine = Product::get();
        return response()->json($vaccine);
    }

    public function product_dose(Request $request)
    {
        $purchased = Purchase::query()
            ->where('product_id',$request->product_id)
            ->where('warehouse_id',Auth::user()->warehouse_id)
            ->where('product_type','vaccine')
            ->sum('qty');
        $sold = Sale::query()
            ->where('product_id',$request->product_id)
            ->where('from_warehouse_id',Auth::user()->warehouse_id)
            ->where('product_type','vaccine')
            ->sum('qty');
        $stock = $purchased - $sold;

        if($stock<=0){
            return 0;
        }


        $doses = DurationVaccine::where('product_id',$request->product_id)->get();
        if(Count($doses) == 0){

        }else{
            $price = Purchase::query()->where('product_id',$request->product_id)->latest()->first()->mrp;
            echo '<script>
                        var price = $("#saleprice").val('.$price.');
                        $("#addTosaleList").removeAttr("disabled");
                </script>';
        }

        $sale = Sale::query()->where('patient_id','!=',null)->where('patient_id',$request->patient_id)->where('product_id',$request->product_id)->orderByDesc('product_id')->first();

        ($sale)?($sale):($sale=0);

        foreach($doses as $dose){
            if($sale['does_no'] < $dose->does_number){
                echo '<option value="'.$dose->does_number.'">'.$dose->does_number.'</option>';
            }
        }
    }

    public function otherproductapi(){
        $other = Product::get();
        return response()->json($other);

    }

    public function wishlist_store(Request $request)
    {
        if($request->ajax()){
            if(Auth::check() == false){
                $response["response"]=0;
                return json_encode($response);
            }
        }
        $product_id     = $request->product_id;
        $user_id        = Auth::user()->id;
        $data =['product_id'=>$product_id,'user_id'=>$user_id];
        $unique = Wishlist::query()->where('product_id',$product_id)->where('user_id',$user_id)->first();
        if($unique == null){
            Wishlist::query()->create($data);
        }
        return redirect()->back()->with('message','This product is already in your wish list');
    }

    public function wish_list_store_api($user_id,$product_id)
    {
        $data =['product_id'=>$product_id,'user_id'=>$user_id];
        $unique = Wishlist::query()->where('product_id',$product_id)->where('user_id',$user_id)->first();
        if($unique == null){
            Wishlist::query()->create($data);
        }
        return json_encode('This product is already in your wish list');
    }

    /* single product view method start */
    public function singeProductView($id){
        $product = Product::findOrFail($id);
        if (empty($product)){
            return redirect()->route('product.add');
        }

        if(request('status')){
            $product->status=$product->status ? 0 : 1;
            $product->update();
            session()->flash('success','Vaccine Status Changed');
            return redirect()->route('product.add');
        }

        return view('admin.product.single-product',compact('product'));

    }
    /* single product view method end */
}
