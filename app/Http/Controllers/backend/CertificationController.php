<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certification;

class CertificationController extends Controller
{
    public function index()
    {
        $certification= Certification::all();
        return view('admin.certification.add-certification',compact('certification'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|string|unique:certifications',
        ]);

        Certification::create($request->all());
        session()->flash('success','Certification has store Successfully');
        return redirect()->route('certification.add');
    }


    public function show($id)
    {
        $certification = Certification::find($id);
        return view('admin.certification.edit-certification',compact('certification'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|string|unique:certifications',
        ]);
        $brand =Certification::find($request->id);
        $brand->name = $request->name;
        $brand->update();
        session()->flash('success','Certification has Update Successfully');

        return redirect()->route('certification.add');

    }

    public function destroy(Request $request)
    {
        $delete = Certification::findOrfail($request->id);
        $delete->delete();
    }
}
