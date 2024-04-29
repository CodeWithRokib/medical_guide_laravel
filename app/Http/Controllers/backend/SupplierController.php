<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Supplier;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function index()
    {
        $this->checkpermission('SupplierManagement/supplier');
        $suppliers = Supplier::all();

        return view('admin.supplier.add-supplier',compact('suppliers'));
    }

    public function store(Request $request)
    {
        $this->checkpermission('SupplierManagement/supplier');
         $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $image = $request->file('image');
        if($image){
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/supplier/'),$filename);

            $data = $request->except('image');
            $data['image']= $filename;

            Supplier::create($data);
        }else{
            Supplier::create( $request->all());
        }
        session()->flash('success','Supplier has store successful');
        return redirect()->route('supplier.add');
    }

    public function show($id){
        $supplier = Supplier::find($id);

        return view('admin.supplier.edit-supplier',compact('supplier'));
    }


    public function update(Request  $request)
    {
        $this->checkpermission('SupplierManagement/update');
        $supplier = Supplier::find($request->id);
//        $supplier->name = $request->name;
//        if($request->oldphone != 1){
//            $this->validate($request,[
//                    'phone'=>'unique:suppliers',
//            ]);
//            $supplier->phone = $request->phone;
//        }

        if( $request->hasFile('image'))
        {
            /* old image unlink start */
            $path = url('admin/supplier/'.$supplier->image);
            //unlink($path);
            /* old image unlink end */
            $image = $request->file('image');
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            //$product->image = $filename;

            $image->move(base_path('public/admin/supplier/'),$filename);
            $data = $request->except('image');
            $data['image'] = $filename;
            $supplier->update($data);
        }else{
            $supplier->update($request->except('image'));
        }

        //$supplier->address = $request->address;
        //$supplier->update();
        session()->flash('success','Supplier has update successful');
        return redirect()->route('supplier.add');
    }


    public function destroy(Request $request)
    {
        $this->checkpermission('SupplierManagement/supplier/erase');
        $delete = Supplier::query()->findOrFail($request->id);
        $delete->delete();

        return redirect()->back()->with('success','Deleted successfully');
    }


    /* suppliers search */
    public function suppliersearch(Request $request)
    {
        $supplier = Supplier::find($request->supplier_id);
    /*dd($supplier);
        foreach($supplier as $sup){*/
            echo '{"name":"'.$supplier->name.'","phone":"'.$supplier->phone.'","address":"'.$supplier->address.'"}';
      //  }

        //  echo '{"id":"1"}';
    }

    /* suppliers end */

    public function SearchSubcategory(Request $request)
    {
        $category_id = Category::find($request->category_id);

        foreach($category_id->sub_categories as $subcategory){
            echo '<option value="'.$subcategory->id.'">'.$subcategory->name.'</option>';
        }
    }
}
