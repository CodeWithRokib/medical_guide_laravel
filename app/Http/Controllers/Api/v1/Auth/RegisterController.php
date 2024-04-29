<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterRersource;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    public function action(Request $request)
    {
        $validator = new RegisterRequest();

        $rules                      = $validator->rules();
        $rules['name']              = 'required|string';
        $rules['email']             = 'required|email|'. Rule::unique("users", "email");
        $rules['password']          = 'required|string|min:6';
        $rules['service_type']      = 'required|integer';
        $rules['division_id']       = 'required|integer';
        $rules['police_station_id'] = 'required|integer';
        $rules['area_id']           = 'required|integer';
        $rules['nid_front']         = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        $rules['nid_back']          = 'nullable|image|mimes:jpeg,png,jpg|max:2048';



        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $role     = Role::find($request->get('role_id'));

        if (blank($role)) {
            return response()->json([
                'data'    => [],
                'message' => 'You given role not found',
                'status'  => 401,
            ], 401);
        }
        $user                    = new User;
        $user->name              = $request->get('name');
        $user->email             = $request->get('email');
        $user->service_type      = $request->get('service_type');
        $user->division_id       = $request->get('division_id');
        $user->police_station_id = $request->get('police_station_id');
        $user->area_id           = $request->get('area_id');
        $user->role_id           = $request->get('role_id');

        $user->password          = bcrypt($request->get('password'));
        $user->save();

        $mainuser = User::with('roles')->find($user->id);
        $mainuser->roles()->attach($request->role_id);


        if (request()->file('image')) {
            $mainuser->media()->delete();
            $mainuser->addMedia(request()->file('image'))->toMediaCollection('user');
        }

        if (request()->file('nid_front')) {
            $mainuser->media()->delete();
            $mainuser->addMedia(request()->file('nid_front'))->toMediaCollection('nid_front');
        }

        if (request()->file('nid_back')) {
            $mainuser->media()->delete();
            $mainuser->addMedia(request()->file('nid_back'))->toMediaCollection('nid_back');
        }


        if (!$token = auth()->guard('api')->attempt($request->only('email', 'password'))) {
            return response()->json([
                'data'    => [],
                'message' => 'You try to using invalid information',
                'status'  => 401,
            ], 401);
        }
        return (new RegisterRersource($mainuser))
            ->additional([
                'token' => $token,
            ], 200);
    }
}
