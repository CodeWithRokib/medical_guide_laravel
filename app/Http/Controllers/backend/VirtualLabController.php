<?php

namespace App\Http\Controllers\backend;

use App\Enums\Status;
use App\Models\Area;
use App\Models\Division;
use App\Models\Ambulance;
use App\Models\Virtuallab;
use App\Models\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VirtualLabController extends Controller
{
    public function index()
    {
        // $this->checkpermission('AmbulanceManagement/ambulance');
        $virtuallabs   = Virtuallab::all();
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');
        return view('admin.virtuallab.add', compact('virtuallabs', 'divisions','policeStation','area'));
    }

    public function store(Request $request)
    {
        // $this->checkpermission('AmbulanceManagement/save');
        // dd($request->all());
        $request->validate([
            'name'              => 'required|string',
            'type'              => 'nullable|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string|unique:virtuallabs',
        ]);
        $data = $request->except('_token');
        $data['status'] = Status::PENDING;
        // dd($data);
        Virtuallab::create($data);
        session()->flash('success', 'Virtual Lab has store successfully complete');
        return redirect()->route('virtuallab.add');
    }

    public function show($id)
    {
        $virtuallabs   = Virtuallab::find($id);
        $divisions     = Division::pluck('name', 'id');
        $policeStation = PoliceStation::pluck('name','id');
        $area          = Area::pluck('name','id');
        return view('admin.virtuallab.edit', compact('virtuallabs', 'divisions','policeStation','area'));
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
            'phone'             => ['required','string', Rule::unique('virtuallabs')->ignore($id)],
        ]);

        $update = Virtuallab::find($id);
        $update->update($request->all());
        session()->flash('success', 'Virtial lab has update successfully complete');
        return redirect()->route('virtuallab.add');
    }

    public function destroy(Request $request)
    {
        // $this->checkpermission('AmbulanceManagement/erase');
        $delete = Virtuallab::find($request->id);
        $delete->delete();
    }

}
