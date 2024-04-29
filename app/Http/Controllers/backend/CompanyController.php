<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $this->checkpermission('CompanyManagement/company');
        $company = Company::all();
        
        return view('admin.company.add-company',compact('company'));
    }

    public function store(CompanyRequest $request)
    {
        $this->checkpermission('CompanyManagement/company');
        Company::create($request->all());
        session()->flash('success','Company has store successfully');
        return redirect()->route('company.add');
    }


    public function show($id)
    {
        $company = Company::find($id);
        $permission_keys=[];
        
        return view('admin.company.edit-company',compact('company'));
    }

    public function update(CompanyRequest $request)
    {
        $this->checkpermission('CompanyManagement/update');
        $role = Company::find($request->id);
        $role->name = $request->name;
        $role->update();
        session()->flash('success', 'Company has store successfully');
        return redirect()->route('company.add');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('CompanyManagement/erase');
        $delete = Company::find($request->id);
        $delete->delete();
    }
}