<?php

namespace App\Http\Controllers\backend;

use App\Models\Area;
use App\Models\Division;

use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;
use App\Http\Requests\PolicestationRequest;

class AreaController 
{
    public function index()
    {
        $area = Area::all();
        return view('admin.area.add',compact('area'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:areas|max:255',
        ]);
        Area::create($request->all());
        session()->flash('success','Area has store successfully');
        return redirect()->route('area.add');
    }


    public function edit($id)
    {
        $area = Area::find($id);
        return view('admin.area.edit',compact('area'));
    }

    public function update(AreaRequest $request)
    {
        // $this->checkpermission('DivisionManagement/update');
        $area = Area::find($request->id);
        $area->name = $request->name;
        $area->update();
        session()->flash('success', 'Area has Update successfully');
        return redirect()->route('area.add');
    }

    public function destroy(Request $request)
    {
        // $this->checkpermission('DivisionManagement/erase');
        $delete = Area::find($request->id);
        $delete->delete();
    }


    /* Android APi */

    public function androidapi(){
        return response()->json(Division::all());
    }

}
