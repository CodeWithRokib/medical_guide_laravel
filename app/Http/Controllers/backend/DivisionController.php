<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Http\Requests\DivisionRequest;

class DivisionController extends Controller
{
    public function index()
    {
        $this->checkpermission('DivisionManagement/division');
        $division = Division::all();
        return view('admin.division.add-division',compact('division'));
    }

    public function store(Request $request)
    {
        $this->checkpermission('DivisionManagement/division');
        $request->validate([
            'name' => 'required|unique:divisions|max:255',
        ]);

        Division::create($request->all());
        session()->flash('success','division has store successfully');
        return redirect()->route('division.add');
    }


    public function show($id)
    {
        $division = Division::find($id);
        return view('admin.division.edit-division',compact('division'));
    }

    public function update(DivisionRequest $request)
    {
        $this->checkpermission('DivisionManagement/update');
        $role = Division::find($request->id);
        $role->name = $request->name;
        $role->update();
        session()->flash('success', 'division has store successfully');
        return redirect()->route('division.add');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('DivisionManagement/erase');
        $delete = Division::find($request->id);
        $delete->delete();
    }


    /* Android APi */

    public function androidapi(){
        return response()->json(Division::all());
    }
}
