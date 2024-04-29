<?php

namespace App\Http\Controllers\backend;

use App\Models\Warehouse;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');
        if(Auth::user()->pin !=0){
            return redirect()->route("/");
        }*/
    }
    public function index(){

        $this->checkpermission('UserManagement/user-create');
        $roles = Role::pluck('name','id');
        $role = Role::all();
        $users = User::all();
        $warehouses = Warehouse::pluck('name','id');
        $permission_keys=[];
        foreach (Auth::user()->roles as $role){
            foreach ($role->permissions as $permission){
                array_push($permission_keys,url('/').'/'.$permission->permission_key);
            }
        }
        return view('admin.user-management.users',compact('users','roles','role','warehouses','permission_keys'));
    }
    public function create()
    {
        $roles = Role::all()->pluck('name','id');
        return view('user.create',compact('roles'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $this->checkpermission('UserManagement/user-store');
        $user_data = $request->except('role_id');
        $user_data['password'] = bcrypt($request->password);
        $user_data['r_password'] = $request->password;
        $user = User::query()->create($user_data);
        $user->roles()->attach($request->role_id);
        Session::flash('success','User created successfully');

        return redirect()->route('user.create');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::query()->findOrFail($id);
        $warehouses = Warehouse::pluck('name','id');

        $role_ids = [];
        foreach($user->roles as $role)
        {
            $role_ids[] = $role->id;
        }

        return view('admin.user-management.edit-users',compact('user','roles','warehouses','role_ids'));
    }

    public function update($id, Request $request)
    {
        $this->checkpermission('UserManagement/update-user');
        $data = $request->except(['role_id']);
        $data['password'] = bcrypt($request->password);
        $data['r_password'] = $request->password;
        $user = User::query()->findOrFail($id);
        $user->update($data);
        $user->roles()->sync($request->role_id);

//        if($request->has('password')){
//            $this->validate($request,[
//                'password' => 'min:6|confirmed',
//            ]);
//            $data = $request->only('password');
//        }else{
//            $this->validate($request,[
//                'name' => 'min:4',
//                'email' => ['email',Rule::unique('users','email')->ignore($user->id)],
//                'roles' => 'required'
//            ]);
//            $data = $request->except(['roles','password']);
//        }
//
//        $user->update($data);
//        if(!$request->has('password')){
//            $user->roles()->sync($request->roles);
//        }
//
        Session::flash('success','User has been updated!');
        return redirect()->route('user.create');
    }

    public function destroy(Request $request)
    {
        $this->checkpermission('UserManagement/erase');
        $delete = User::find($request->id);
        $delete->roles()->detach();
        $delete->delete();
    }

}
