<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\WarehouseRequest;

use App\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::all();
        return view('admin.warehouse.add-warehouse',compact('warehouses'));
    }

    public function store(Request $request)
    {
        Warehouse::create($request->all());
        session()->flash('success','Warehouse has store successfully');
        return redirect()->route('warehouse.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse = Warehouse::find($id);
        return view('admin.warehouse.edit-warehouse',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WarehouseRequest $request)
    {
        $warehouse = Warehouse::find($request->id);
        $warehouse->name = $request->name;
        $warehouse->phone = $request->phone;
        $warehouse->address = $request->address;
        $warehouse->update();
        session()->flash('success','Warehouse update has successfully complete');
        return redirect()->route('warehouse.add');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete = Warehouse::find($request->id);
        $delete->delete();
    }
}
