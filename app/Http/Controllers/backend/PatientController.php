<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\PatientRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Models\Sale;
use App\Dieseas;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('admin.patient.add-patient');
    }


    public function store(PatientRequest $request)
    {
        $pin = sprintf("%'04d", rand(0000,9999));

        $user = User::create([
            'name'=>$request->name,
            'pin' =>$pin,
            'email'=>$request->email,
            'password'=>bcrypt('123456'),
            'warehouse_id'=>Auth::user()->warehouse_id
        ]);
        $data = $request->all();
        $data['user_id'] = $user->id;
        $patient =Patient::create($data);

        session()->flash('success','Vaccine applier successfully stored');
        return redirect()->route('patient.add');
    }

    /* Ajax Registration Start */
    public function ajaxstore(Request $request)
    {
        
        $pin = sprintf("%'04d", rand(0000,9999));

        $input=new User();
        $input->name=$request->name;
        $input->email=$request->email;
        $input->password=bcrypt('123456');
        $input->r_password='123456';
        $input->pin = $pin;
        $input->warehouse_id=Auth::User()->warehouse_id;

        $input->save();
        $id= $input->id;

        $data = $request->all();
        $data['user_id'] = $id;
        $patient =Patient::query()->create($data);
        $url = "{$input->id}@{$input->r_password}#{$input->pin}";
        $filename = Carbon::now()->format('Y-m-d').$id;
        QrCode::generate($url, 'public/admin/user/'.$filename.'.svg');
        $user = User::query()->findOrFail($id);
        $user->qr = $filename;
        $user->save();
        $data = [];
        $data['complete'] = 'done';
        return response()->json($data);

    }

    /* Ajax Registration End */

    public function show()
    {
        $this->checkpermission('PatientManagement/view');
        $patients = Patient::all();
        return view('admin.patient.all-patient',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('admin.patient.edit-patient',compact('patient'));
    }


    public function update(PatientRequest $request)
    {
        $update = Patient::find($request->id);
        $update->update($request->all());
        session()->flash('success','Vaccine Appliers has succesfully updated');
        return redirect()->route('patient.view');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('PatientManagement/erase');
        $delete = Patient::find($request->id);
        $delete->delete();
    }


    public function vaccineapplierlist(){
        $appliers = Patient::all();
        echo '<option value="0">SELECT VACCINE APPLIER NAME</option>';
        foreach ($appliers as $doctor){
            echo '<option value="'.$doctor->id.'">'.$doctor->name.'(' .$doctor->phone. ')'.'</option>';
        }
    }


    public function appliedhistory(Request $request){

        $data = Sale::where('patient_id',$request->patient_id)->get()->toArray();
        $patient = Patient::find($request->patient_id);
        $dieseas = Dieseas::find($request->dieseas_id);
        /*$msg=[];
        $msg['name']=$patient->name;
        $msg['phone']=$patient->phone;
        $msg['dieseas']=$dieseas->name;*/
        if(Count($data)>0){
            return $data;
        }else{
            $response['history']=0;
            return response()->json($response);
        }
    }

    /* Applied History With QR Code Start */
    public function PatientAppliedHistory($id){
        $patient = Patient::find($id);
        return view('admin.patient.patient-info',compact('patient'));
    }
    /* Applied History With QR Code End*/

    
    /* Qr Info Start */
    public function QrPatientAppliedHistory($id){
        $patient = Patient::find($id);
        return view('admin.patient.qr-info',compact('patient'));
    }
    /* Qr Info End*/

    /*Android API Start*/
    public function all_patients()
    {
        $patients = User::query()->where('pin','!=',0)->get(['id']);
        return ['client_info'=>$patients];
    }

    public function get_pin($id)
    {
        $user_pin = User::query()->findOrFail($id)->pin;
        $pin = ['pin'=>$user_pin];
        return json_encode($pin);
    }


    /*Android API End*/
}
