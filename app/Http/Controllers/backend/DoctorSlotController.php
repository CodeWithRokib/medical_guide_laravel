<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Doctor;
use App\Enums\RoleType;
use App\Enums\SlotStatus;
use App\Models\Hospital;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\DoctorSlot;

class DoctorSlotController extends Controller
{

    public function index()
    {
        $this->checkpermission('DoctorManagement/all-doctor');
        $doctors = Doctor::with('user')->get();
        $slots = DoctorSlot::with('doctor')->get();
        $hospitals = Hospital::pluck('name','id');

        return view('admin.doctor.add-doctor-slot',compact('slots','doctors','hospitals'));
    }


    public function store(Request $request)
    {

        $this->checkpermission('DoctorManagement/doctor');
        $request->validate([
            'doctor_id' => 'required',
            'date'      => 'required',
            'slot_from' => 'required',
            'slot_to'   => 'required',
        ]);

        DoctorSlot::query()->create($request->except(['_token']) + ['status' => SlotStatus::UNCONFIRM]);
        session()->flash('success','Doctor Slot saved');
        return redirect()->route('doctor.slot.index');

    }

    public function ajaxstore(Request $request)
    {

        $image = $request->file('image');
        if($image) {
            $filename = Date('Y') . "_" . substr(md5(time()), 0, 6) . "." . $image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'), $filename);
            $data = $request->except('image');
            $data['image'] = $filename;
            Doctor::create($data);
        }else{
            Doctor::create($request->all());
        }
        echo '{"response":"done"}';
    }


    public function show()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.all-doctor',compact('doctors'));
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $hospitals = Hospital::pluck('name','id');
        $specialists = Specialist::pluck('name','id');
        return view('admin.doctor.edit-doctor',compact('hospitals','doctor','specialists'));
    }

    public function update($id, Request $request)
    {

        $this->checkpermission('DoctorManagement/update');

        $request->validate([
            'name'          => 'required|max:255',
            'hospital_id'   => 'required',
            'specialist_id' => 'required',
            'gender'        => 'required'
        ]);

        $data = $request->except(['image']);

        $doctor = Doctor::query()->findOrFail($id);
        if($request->hasFile('image')){

            /* old file remove start */
            if ($doctor->image !=null ){
                $path = 'public/admin/product/upload/'.$doctor->image;
                @unlink($path);
            }
            /* old file remove End  */

            $image    = $request->file('image');
            $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data['image'] = $filename;
        }


        $doctor->update($data);
      //  $doctor->hospitals()->sync($request->hospital_id);
      //  $doctor->specialists()->sync($request->specialist_id);

        session()->flash('success','Doctor information already updated');
        return redirect()->route('doctor.add');

    }


    public function destroy(Request $request)
    {
        $this->checkpermission('DoctorManagement/erase');

        $delete = DoctorSlot::find($request->id);
    //   $delete->hospitals()->detach();
    //    $delete->specialists()->detach();
        $delete->delete();
    }

    public function doctorlist(){
        $doctors = Doctor::all();
        $html="";
        $html.="<option>Select Doctor</option>";
        foreach ($doctors as $doctor){
            $html.='<option value="'.$doctor->id.'">'.$doctor->name.'</option>';
        }
        return $html;
    }

    public function androiddoctorlist()
    {
        $doctors = Doctor::all()->toArray();
        return $doctors;
    }

    /*doctor profile method start */
    public function doctorProfile($id){
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctor.doctor-profile',compact('doctor'));
    }
    /* doctor profile method end */


    public function findSpecialist(Request $request){
        $specialist = Specialist::where('hospital_id',$request->hospital_id)->get();

        foreach ($specialist as $info){
            echo '<option value="'.$info->id.'">'.$info->name   .'</option>';
        }
    }


    public function slot()
    {
        $this->checkpermission('DoctorManagement/all-doctor');
        $doctors = Doctor::with('user')->get();
        return view('admin.doctor.add-doctor-slot',compact('doctors'));
    }

    public function slotStore(Request $request)
    {
        $this->checkpermission('DoctorManagement/doctor');
        $request->validate([
            'date'          => 'required',
            'doctor_id'         => 'required',
            'password'      => 'required',
            'gender'        => 'required',
            'hospital_id'   => 'required',
            'specialist_id' => 'required',

        ]);

       $user =  User::create([
            'role_id'  => RoleType::DOCTORS,
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => bcrypt($request->password)
        ]);


        Doctor::query()->create($request->except(['image']) + ['user_id' => $user->id]);
        session()->flash('success','Doctor saved');
        return redirect()->route('doctor.add');

    }
}
