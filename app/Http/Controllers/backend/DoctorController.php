<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Doctor;
use App\Enums\RoleType;
use App\Models\Hospital;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class DoctorController extends Controller
{

    public function index()
    {
        $this->checkpermission('DoctorManagement/all-doctor');
        $doctors = Doctor::with('hospital','user')->get();
        $hospitals = Hospital::pluck('name','id');
        $specialists = Specialist::pluck('name','id');
        return view('admin.doctor.add-doctor',compact('doctors','hospitals','specialists'));
    }


    public function store(Request $request)
    {
        $this->checkpermission('DoctorManagement/doctor');
        $request->validate([
            'name'          => 'required|max:255',
            'email'         => 'required|email|'. Rule::unique("users", "email"),
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
        if ($request->file('image')) {
            $user->addMedia($request->file('image'))->toMediaCollection('user');
        }
        session()->flash('success','Doctor saved');
        return redirect()->route('doctor.add');

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

    public function update(Request $request)
    {
        $this->checkpermission('DoctorManagement/update');
        $request->validate([
            'name'          => 'required|max:255',
            'hospital_id'   => 'required',
            'specialist_id' => 'required',
            'gender'        => 'required'
        ]);
        $doctor = Doctor::query()->findOrFail($request->id);
        $user = User::find($doctor->user_id);

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($request->file('image') && $user instanceof User) {
            $this->deleteMedia('user', $user->id);
            $user->addMediaFromRequest('image')->toMediaCollection('user');
        }
        $doctor = Doctor::query()->findOrFail($request->id);
        $doctor->update($request->all());

     

        session()->flash('success','Doctor information already updated');
        return redirect()->route('doctor.add');

    }

    public function deleteMedia($mediaName, $mediaId)
    {
        $media = Media::where([
            'collection_name' => $mediaName,
            'model_id' => $mediaId,
            'model_type' => User::class,
        ])->first();

        if ($media) {
            $media->delete();
        }
    }



    public function destroy(Request $request)
    {
        $this->checkpermission('DoctorManagement/erase');

        $delete = Doctor::find($request->id);
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
