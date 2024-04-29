<?php

namespace App\Http\Controllers\backend;

use App\Models\Division;
use App\Models\DoctorHospital;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HospitalRequest;
use App\Models\Doctor;
use DB;
use Illuminate\Validation\Rule;
class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkpermission('HospitalManagement/hospital');
        $division = Division::pluck('name','id');
        $hospitals = Hospital::latest()->get();

        return view('admin.hospital.add-hospital',compact('hospitals','division'));
    }

    public function hospitalDoctor($id){
        $doctors = Hospital::findOrFail($id);
        $data=[];
        foreach ($doctors->doctors as $key=>$info){
            $data[$key]["hospital"]=$doctors->name;
            $data[$key]["doctor"]=$info->name;
            $data[$key]["image"]=($info->image !=null ? asset("public/admin/product/upload/".$info->image) : asset('public/admin/product/upload/noimage.png'));
            $data[$key]["phone"]= ($info->phone!=null ? $info->phone : "N/A");
            $data[$key]["email"]= ($info->email!=null ? $info->email : "N/A");
            $data[$key]["description"]=($info->description !=null ? $info->description : "N/A");
        }

        return json_encode(["doctorList"=>$data]);
    }


    public function store(HospitalRequest $request)
    {
        $this->checkpermission('HospitalManagement/hospital');
        $request->validate([
            'name' => 'required|unique:expenses|max:255',
//            'description'=>'required',
            'division_id'=>'required',

        ]);
        $image = $request->file('image');
        if($image) {
            $filename = Date('Y') . "_" . substr(md5(time()), 0, 6) . "." . $image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'), $filename);
            $data = $request->except('image');
            if ($request->file('image')){
                $data['image'] = $filename;
            }
            Hospital::create($data);
        }else{
            Hospital::create($request->all());
        }
        session()->flash('success','Hospital  saved');
        return redirect()->route('hospital.add');
    }

    public function show($id)
    {
        $hospital = Hospital::find($id);
        $division = Division::pluck('name','id');
        return view('admin.hospital.edit-hospital',compact('hospital','division'));
    }

//    public function update(Request $request)
//    {
//        if($request->currenthospital == 1){
//            $product = Hospital::find($request->id);
//            if( $request->hasFile('image'))
//            {
//                /* old image unlink start */
//
//                $path = 'public/admin/product/upload/'.$product->image;
//                unlink($path);
//
//                /* old image unlink end */
//
//                $image = $request->file('image');
//                 $image_name = substr(md5(time()),0,6);
//                $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
//                //$product->image = $filename;
//                $image->move(base_path('public/admin/product/upload/'),$filename);
//                $data = $request->except('image');
//                $data['image'] = $filename;
//                $product->update($data);
//
//            }else{
//                $product->update($request->except('image'));
//            }
//        }else{
//            $this->validate($request,[
//                'name'=>'required|unique:hospitals,name,'.$request->id
//            ]);
//        }
//
//
//        session()->flash('success','Hospital already updated');
//        return redirect()->route('hospital.add');
//
//    }

    public function update(Request $request)
    {
        $this->checkpermission('HospitalManagement/update');
        $this->validate($request,[
//            'name' => [ 'required', Rule::unique('hospitals')->ignore($request->id)],
        ]);
        $product = Hospital::find($request->id);

        /* image remove */


        if( $request->hasFile('image'))
        {
            /* old image unlink start */
            $path = url('public/admin/product/upload/'.$product->image);
           // unlink($path);
            /* old image unlink end */
            $image = $request->file('image');
            $image_name = substr(md5(time()),0,6);
            $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();
            //$product->image = $filename;

            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data = $request->except('image');
            if ($request->file('image')){
                $data['image'] = $filename;
            }
            $product->update($data);
        }else{
            $product->update($request->except('image'));
        }

        session()->flash('success','Hospital update');
        return redirect()->route('hospital.add');
    }

    public function destroy(Request $request)
    {
        //  $this->checkpermission('HospitalManagement/erase');

        /* Image Unlink Start */
        $img_path = Hospital::find($request->id);
    //   if($img_path->image){

    //   }
        $path = 'admin/product/upload/'.$img_path->image;
        // unlink($path);
        if (is_file($path)){
            unlink($path);
        }
        /* Image Unlink End */
        $img_path->delete();


        // if ($img_path['image']){
        //     unlink('admin/product/upload/'.$img_path->image);
        // }
        // $img_path->delete();
        return back();
    }


    public function androidapi(){
        $hospitals = Hospital::all();
        return response()->json($hospitals);
    }

    public function androidapispecialist($hospital_id){
        $data =[];
        $specialist = Hospital::query()->where('id',$hospital_id)->first();
        foreach($specialist->doctors as $doctor){
            array_push($data, ['doctor_name'=>$doctor->name,'specialist'=>$doctor->specialist->name]);
        }
        return json_encode($data);
    }


}
