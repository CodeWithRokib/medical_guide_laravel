<?php

namespace App\Http\Controllers\backend;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkpermission('UserManagement/role-create');
        $role = Role::pluck('name','id');
        $roles = Role::all();
        $permissions = Permission::all();

        $user                   = Permission::query()->where('label_id','1')->get();
        $role_permission        = Permission::query()->where('label_id','2')->get();
        $company                = Permission::query()->where('label_id','3')->get();
        $supplier               = Permission::query()->where('label_id','4')->get();
        $product                = Permission::query()->where('label_id','5')->get();
        $other_product          = Permission::query()->where('label_id','6')->get();
        $purchase_vaccine       = Permission::query()->where('label_id','7')->get();
        $purchase_other         = Permission::query()->where('label_id','8')->get();
        $stock                  = Permission::query()->where('label_id','9')->get();
        $sale                   = Permission::query()->where('label_id','10')->get();
        $transfer               = Permission::query()->where('label_id','11')->get();
        $invoice                = Permission::query()->where('label_id','12')->get();
        $expenses               = Permission::query()->where('label_id','13')->get();
        $reports                = Permission::query()->where('label_id','14')->get();
        $hospitals              = Permission::query()->where('label_id','15')->get();
        $doctors                = Permission::query()->where('label_id','16')->get();
        $specialists            = Permission::query()->where('label_id','17')->get();
        $divisions              = Permission::query()->where('label_id','18')->get();
        $blood_banks            = Permission::query()->where('label_id','19')->get();
        $ambulances             = Permission::query()->where('label_id','20')->get();
        $customers              = Permission::query()->where('label_id','21')->get();
        $wishlists              = Permission::query()->where('label_id','22')->get();

       // return view('admin.role.add-role',compact('roles'));
        return view('admin.user-management.roles',compact('role','roles','permissions','user','role_permission','company','supplier','product','other_product','purchase_vaccine','purchase_other','stock','sale','transfer','invoice','expenses','reports','hospitals','doctors','specialists','divisions','blood_banks','ambulances','customers','wishlists'));
    }

    public function store(Request $request)
    {
        $this->checkpermission('UserManagement/store-role');
//        dd($request->all());
        $role = Role::query()->create($request->all());
        $data = [];
        $permissions = $request->asignpermission;
        foreach($permissions as $key => $permission){
            $data=[
                'role_id' => $role->id,
                'permission_id' => $permission
            ];
            PermissionRole::query()->create($data);
        }
        session()->flash('success','Role has store successfully');
        return redirect()->route('role.create');
    }


    public function edit($id){
        // $role = PermissionRole::find($id);
        $role = Role::query()->findOrFail($id);
        $permissions = Permission::all();
        $currentpermissions = $role->permissions;
        $check = '';

        $user                   = Permission::query()->where('label_id','1')->get();
        $role_permission        = Permission::query()->where('label_id','2')->get();
        $company                = Permission::query()->where('label_id','3')->get();
        $supplier               = Permission::query()->where('label_id','4')->get();
        $product                = Permission::query()->where('label_id','5')->get();
        $other_product          = Permission::query()->where('label_id','6')->get();
        $purchase_vaccine       = Permission::query()->where('label_id','7')->get();
        $purchase_other         = Permission::query()->where('label_id','8')->get();
        $stock                  = Permission::query()->where('label_id','9')->get();
        $sale                   = Permission::query()->where('label_id','10')->get();
        $transfer               = Permission::query()->where('label_id','11')->get();
        $invoice                = Permission::query()->where('label_id','12')->get();
        $expenses               = Permission::query()->where('label_id','13')->get();
        $reports                = Permission::query()->where('label_id','14')->get();
        $hospitals              = Permission::query()->where('label_id','15')->get();
        $doctors                = Permission::query()->where('label_id','16')->get();
        $specialists            = Permission::query()->where('label_id','17')->get();
        $divisions              = Permission::query()->where('label_id','18')->get();
        $blood_banks            = Permission::query()->where('label_id','19')->get();
        $ambulances             = Permission::query()->where('label_id','20')->get();
        $customers              = Permission::query()->where('label_id','21')->get();
        $wishlists              = Permission::query()->where('label_id','22')->get();

        
        return view('admin.user-management.edit-roles',compact('role','check','permissions','currentpermissions','user','role_permission','company','supplier','product','other_product','purchase_vaccine','purchase_other','stock','sale','transfer','invoice','expenses','reports','hospitals','doctors','specialists','divisions','blood_banks','ambulances','customers','wishlists'));
    }
    public function wish(){
        $wishlists = Wishlist::all();
        return view('admin.wish.wishlist',compact('wishlists'));
    }

    public function update($id, Request $request)
    {
//        dd($request->all());
        $this->checkpermission('UserManagement/update-role');
//        $role = PermissionRole::find($request->id);
//        $role->permission_id = $request->permission_id;
//        $role->role_id = $request->role_id;
//        $role->update();
       // dd($request->all());
        $role = Role::query()->findOrFail($id);

//        $this->validate($request,[
//            'name' => ['required',Rule::unique('roles')->ignore($role->id)],
//        ]);

        $role->update($request->all());
        $role->permissions()->sync($request->asignpermission);

        session()->flash('success', 'Role has store successfully');
        return redirect()->route('role.create');
    }
    public function view(){
        $roles = Role::all();
        
        return view('admin.user-management.view-roles',compact('roles'));
    }


    public function destroy(Request $request)
    {
        $this->checkpermission('UserManagement/role/erase');
        $delete = Role::find($request->id);
        $delete->delete();
    }



//    public function role(){
//        return view('admin.user-management.roles');
//    }
}
