<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pharmacy;

class PharmacyController extends Controller
{
    public function index(){
        $pharmacy = Pharmacy::all();
        return view('admin.pharmacy.add-pharmacy',compact('pharmacy'));
    }

    public function store(Request $request){
        //  dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'website'=>'required|unique:pharmacies',
            'phone'=>'required|unique:pharmacies',
            'telephone'=>'required|unique:pharmacies',
            'email'=>'required|unique:pharmacies',
            'facebook'=>'required|unique:pharmacies',
            'helpline'=>'required|unique:pharmacies',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);

        $image = $request->file('image');
        $image_name = substr(md5(time()),0,6);
        $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();

        $image->move(base_path('public/admin/product/upload/'),$filename);
        $data = $request->except('image');
        $data['image'] = $filename;
        Pharmacy::create($data);
        session()->flash('success','Pharmacy has store successfully complete');
        return redirect()->route('pharmacy.add');
    }

    public function show($id){
        $pharmacy = Pharmacy::find($id);
        return view('admin.pharmacy.edit-pharmacy',compact('pharmacy'));
    }

    public function update(Request $request){
        
        
        
        if($request->currentpharmacy ==1){
            $this->validate($request,[
            'name'=>'required',
            'website'=>'required',
            'phone'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'helpline'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif',
        ]);
        
        
            $update = Pharmacy::find($request->id);
        
            if($request->has('image')){
                /*unlink start */
                $path = "public/admin/product/upload/".$update->image;
                unlink($path);
                /*unlink End */
                $image = $request->file('image');
                $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
                $data = $request->except('image');
                $data['image']= $filename;
                $update->update($data);
            }else{
                $update->update($request->all());
            }
        }else{
            $this->validate($request,[
            'name'=>'required',
            'website'=>'required|unique:pharmacies',
            'phone'=>'required|unique:pharmacies',
            'telephone'=>'required|unique:pharmacies',
            'email'=>'required|unique:pharmacies',
            'facebook'=>'required|unique:pharmacies',
            'helpline'=>'required|unique:pharmacies',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);
        }
        
        
        
        session()->flash('success','Pharmacy has update successfully complete');
        return redirect()->route('pharmacy.add');
    }

    public function destroy(Request $request){
      //  dd($request->all());

        $delete = Pharmacy::find($request->id);
        
        if($delete->image != null){
            $path = "public/admin/product/upload/".$delete->image;
            unlink($path);
        }
        $delete->delete();
    }

    public function androidpharmacy(){
        return Pharmacy::all()->toArray();
    }
}
