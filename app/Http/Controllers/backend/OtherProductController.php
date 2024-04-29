<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Dieseas;
use App\Http\Requests\ProductRequest;
use App\DurationVaccine;
use Illuminate\Support\Facades\Auth;


class OtherProductController extends Controller
{
    public function index()
    {
        $this->checkpermission('ProductManagement/other-product');
        $vaccines = Product::query()->where('product_type','other')->get();
        
        return view('admin.otherproduct.add-product',compact('vaccines'));
    }

    public function store(Request $request){
        $this->checkpermission('ProductManagement/save-other-product');
            $this->validate($request,[
                'name'=>'required|unique:products',
                'price'=>'required',
                'description'=>'required',
                'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif'
            ]);

       //dd($request->all());
        $data= $request->except('image');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = Date('Y').'_'.substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data['image']=$filename;
        }

        Product::query()->create($data);
        session()->flash('success','Product saved as other product');
        return redirect()->route('otherproduct.add');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.otherproduct.edit-product',compact('product'));
    }

    public function update(Request $request){
        $this->checkpermission('ProductManagement/update-otherproduct');
        $product = Product::find($request->id);
        if($request->oldname!=NULL){
            $this->validate($request,[
                'name'=>'required|unique:products,name,'.$request->id,
                'price'=>'required',
                'description'=>'required',
                'image'=>'image|mimes:jpg,jpeg,png,svg,gif'
            ]);
        }else{
            $this->validate($request,[
                'name'=>'required|unique:products,name,'.$request->id
            ]);
        }

        if( $request->hasFile('image')){
            /* old image unlink start */
            $path = 'public/admin/product/upload/'.$product->image;
            unlink($path);
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

        session()->flash('success','Product update successfully complete');
        return redirect()->route('otherpro.view');

    }/* update method closing */

    public function destroy(Request $request)
    {
        $this->checkpermission('ProductManagement/erase-otherproduct');
        /* Image Unlink Start */
        $img_path = Product::find($request->id);
        // dd($img_path->image);

        if($img_path->image != null ){
            $path = 'public/admin/product/upload/'.$img_path->image;
            unlink($path);
        }

        /* Image Unlink Start */
        $img_path->delete();
    }

    public function product_find(Request $request){
        $info = Product::find($request->id);
        $data = [];
        $data["id"]= $info->id;
        $data["price"]= $info->price;

        return response()->json($data);
    }
}
