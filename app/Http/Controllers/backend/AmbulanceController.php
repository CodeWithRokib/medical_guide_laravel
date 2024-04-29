<?php

namespace App\Http\Controllers\backend;

use App\Models\Area;
use App\Models\Division;
use App\Models\Ambulance;
use Illuminate\Http\Request;
use App\Models\PoliceStation;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AmbulanceController extends Controller
{
    public function index()
    {
        $this->checkpermission('AmbulanceManagement/ambulance');
        $ambulances    = Ambulance::all();
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');

        return view('admin.ambulance.add-ambulance', compact('ambulances', 'divisions','policeStation','area'));
    }

    public function store(Request $request)
    {
        // $this->checkpermission('AmbulanceManagement/save');
        $request->validate([
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string',
        ]);
        $data = $request->except('_token');
        Ambulance::create($data);
        session()->flash('success', 'Ambulance has store successfully complete');
        return redirect()->route('ambulance.add');
    }

    public function show($id)
    {
        $ambulance     = Ambulance::find($id);
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');
        return view('admin.ambulance.edit-ambulance', compact('ambulance', 'divisions','policeStation','area'));
    }

    public function update(Request $request, $id)
    {
        $this->checkpermission('AmbulanceManagement/update');
        $request->validate([
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone' => ['required','string', Rule::unique('ambulances')->ignore($id)],
        ]);

        $update = Ambulance::find($id);
        $update->update($request->all());
        session()->flash('success', 'Ambulance has update successfully complete');
        return redirect()->route('ambulance.add');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('AmbulanceManagement/erase');
        $delete = Ambulance::find($request->id);
        $delete->delete();
    }
}
