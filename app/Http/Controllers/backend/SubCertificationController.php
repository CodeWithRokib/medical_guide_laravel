<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certification;
use App\SubCertification;

class SubCertificationController extends Controller
{
    public function index()
    {
        $subcertification = SubCertification::all();
        $certification = Certification::pluck('name','id');
        return view('admin.sub-certification.add-sub-certification',compact('subcertification','certification'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'certification_id'=>'required',
        ]);

        $exist = SubCertification::Where('name',$request->name)->Where('certification_id',$request->certification_id)->exists();
        if($exist){
            session()->flash('error','Sub Certification already exist in Database');
            return redirect()->route('subcertification.add');
        }

        SubCertification::create($request->all());
        session()->flash('exit','Sub-Certification has store successfully');
        return redirect()->route('subcertification.add');
    }


    public function show($id)
    {
        $subcertification = SubCertification::find($id);
        $certification =  Certification::pluck('name','id');
        return view('admin.sub-certification.edit-sub-certification',compact('subcertification','certification'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'certification_id'=>'required',
        ]);

        //dd($request->all());


        $exist = SubCertification::Where('name',$request->name)->Where('certification_id',$request->certification_id)->exists();
        if($exist){
            session()->flash('error','Sub Certification already exist in Database');
            return redirect('SubCertificationManagement/edit/'.$request->id);
        }else{
            $subcatupdate = SubCertification::find($request->id);
            $subcatupdate->name = $request->name;
            $subcatupdate->update();
            session()->flash('success','Sub-Certification has update successfully');
            return redirect()->route('subcertification.add');
        }
    }


    public function destroy(Request $request)
    {
        $delete = SubCertification::find($request->id);
        $delete->delete();
    }


    /* add doctor page sub-certification collect method */

    public function getsubcertification(Request $request){
        $get = SubCertification::where("certification_id",$request->certification_id)->get();
        foreach ($get as $item) {
            echo '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }


}
