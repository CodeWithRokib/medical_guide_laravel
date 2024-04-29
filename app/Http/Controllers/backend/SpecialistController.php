<?php

namespace App\Http\Controllers\backend;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Validation\Rule;

class SpecialistController extends Controller
{
    public function index(){
        $this->checkpermission('DoctorManagement/specialist');
        $hospitals = Hospital::pluck('name','id');
        $specialists = Specialist::all();
        return view('admin.doctor.add-specialist',compact('specialists','hospitals'));
    }


    public function store(Request $request)
    {
        $this->checkpermission('DoctorManagement/store-specialist');

       // dd($request->all());

        $exit = Specialist::where('name',$request->name)->get();

        if($exit->count()>0){
            $this->validate($request,[
                'name'=>'unique:specialists'
            ],[
            'name.unique'=>'Name already taken. '
            ]);
        }

        Specialist::create($request->all());
        session()->flash('success','Specialist has store successfully');
        return redirect()->route('specialist.add');
    }
//
    public function show($id)
    {
        $hospitals = Hospital::pluck('name','id');

        $specialist = Specialist::findOrFail($id);
        return view('admin.doctor.edit-specialist',compact('specialist','hospitals'));
    }
//
    public function update(Request $request,$id)
    {

        $this->validate($request,[
            'hospital_id'=>'required',
            'name'=>['required',Rule::unique('specialists')->ignore($id)],
        ]);

        $this->checkpermission('DoctorManagement/update-specialist');

        $update = Specialist::findOrFail($request->id)->update($request->all());
       // dd(["find"=>$role,"data"=>$request->all()]);
        session()->flash('success', 'Specialist has updated successfully');
        return redirect()->route('specialist.add');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('DoctorManagement/erase-specialist');
        $delete = Specialist::findOrFail($request->id);
        $delete->delete();
    }
}
