<?php

namespace App\Http\Controllers\backend;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\BloodBank;
use App\Models\PoliceStation;

class BloodBankController extends Controller
{
    public function index()
    {
        $this->checkpermission('BloodBankManagement/bloodbank');
        $division      = Division::pluck('name','id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');
        /* change try*/
        return view('admin.bloodbank.add-bloodbank',compact('division','policeStation','area'));
    }

    public function store(Request $request){
        //$this->checkpermission('BloodBankManagement/save');
        $request->validate([
            'name'              => 'required|string|unique:bloodbanks|max:255',
            'blood_group'       => 'required|string',
            'rh_fector'         => 'required|string',
            'phone'             => 'required|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric'
        ]);

        $data = $request->except('_token');
        BloodBank::create($data);

        session()->flash('success','Blood bank successfully added');
        return redirect()->route('bank.view'); 
    }


    public function view(){
        $bloodbanks = BloodBank::with(['devision','policestation','area'])->get();
        return view('admin.bloodbank.view-bloodbank',compact('bloodbanks'));
    }

    public function show($id)
    {
        $bloodbank      = BloodBank::find($id);
        $divisions      = Division::pluck('name','id');
        $areas          = Area::pluck('name','id');
        $policeStations = PoliceStation::pluck('name','id');

        return view("admin.bloodbank.edit-bloodbank",compact('bloodbank','divisions','areas','policeStations'));
    }

    public function update(Request $request)
    {
        // $this->checkpermission('BloodBankManagement/update');

        $bloodBank                    = BloodBank::find($request->id);
        $bloodBank->division_id       = $request->division_id;
        $bloodBank->police_station_id = $request->police_station_id;
        $bloodBank->area_id           = $request->area_id;
        $bloodBank->name              = $request->name;
        $bloodBank->phone             = $request->phone;
        $bloodBank->blood_group       = $request->blood_group;
        $bloodBank->rh_fector         = $request->rh_fector;
        $bloodBank->update();

        session()->flash('success','Blood bank successfully Updated');
        return redirect()->route('bank.view');
    }


    public function destroy(Request $request)
    {
        $this->checkpermission('BloodBankManagement/erase');
        $bloodbank = BloodBank::find($request->id);
        $bloodbank->delete();
    }

}
