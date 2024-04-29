<?php

namespace App\Http\Controllers\backend;

use App\Models\Division;

use App\Models\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Requests\PolicestationRequest;

class PoliceStationController 
{
    public function index()
    {
        $policestation = PoliceStation::all();
        return view('admin.police-station.add',compact('policestation'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:police_stations|max:255',
        ]);
        PoliceStation::create($request->all());
        session()->flash('success','police station has store successfully');
        return redirect()->route('policestation.add');
    }


    public function edit($id)
    {
        $policestation = PoliceStation::find($id);
        return view('admin.police-station.edit',compact('policestation'));
    }

    public function update(PolicestationRequest $request)
    {
        // $this->checkpermission('DivisionManagement/update');
        $policestations = PoliceStation::find($request->id);
        $policestations->name = $request->name;
        $policestations->update();
        session()->flash('success', 'Poloce Stations has Update successfully');
        return redirect()->route('policestation.add');
    }

    public function destroy(Request $request)
    {
        // $this->checkpermission('DivisionManagement/erase');
        $delete = PoliceStation::find($request->id);
        $delete->delete();
    }


    /* Android APi */

    public function androidapi(){
        return response()->json(Division::all());
    }

}
