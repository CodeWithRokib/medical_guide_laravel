<?php

namespace App\Http\Controllers\backend;

use App\Models\Area;
use App\Models\Division;
use App\Models\Virtuallab;
use App\Models\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\OverseasTreatment;
use Illuminate\Support\Facades\Auth;

class OverseasTreatmentController extends Controller
{
    public function index()
    {
        // $this->checkpermission('AmbulanceManagement/ambulance');
        $overseastreatment   = OverseasTreatment::all();
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');

        return view('admin.overseas-treatment.add', compact('overseastreatment', 'divisions','policeStation','area'));
    }
    public function appOverseas()
    {
        // $this->checkpermission('AmbulanceManagement/ambulance');
        $overseastreatment   = OverseasTreatment::all();
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');

        return view('admin.overseas-treatment.app-overseas', compact('overseastreatment'));
    }

    public function store(Request $request)
    {
        // $this->checkpermission('AmbulanceManagement/save');
        $request->validate([
            'name'              => 'required|string',
            'type'              => 'nullable|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string|unique:overseas_treatments',
        ]);
        $data = $request->except('_token');
        OverseasTreatment::create($data);
        session()->flash('success', 'Overseas Treatment has store successfully complete');
        return redirect()->route('overseastreatment.add');
    }

    public function show($id)
    {
        $overseastreatment = OverseasTreatment::find($id);
        $divisions         = Division::pluck('name', 'id');
        $policeStation     = PoliceStation::pluck('name','id');
        $area              = Area::pluck('name','id');
        return view('admin.overseas-treatment.edit', compact('overseastreatment', 'divisions','policeStation','area'));
    }

    public function update(Request $request, $id)
    {
        // $this->checkpermission('AmbulanceManagement/update');

        $request->validate([
            'name'              => 'required|string',
            'type'              => 'nullable|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => ['required','string', Rule::unique('overseas_treatments')->ignore($id)],
        ]);

        $update = OverseasTreatment::find($id);
        $update->update($request->all());
        session()->flash('success', 'Overseas Treatment has update successfully complete');
        return redirect()->route('overseastreatment.add');
    }

    public function destroy(Request $request)
    {
        // $this->checkpermission('AmbulanceManagement/erase');
        $delete = OverseasTreatment::find($request->id);
        $delete->delete();
    }

}
