<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Models\User;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\RegisterRersource;
use Illuminate\Support\Facades\Validator;



class SocialLoginController extends Controller
{

    public function action(Request $request)
    {
        $validator = new LoginRequest();

        $rules            = $validator->rules();
        $rules['email']   = 'required|email';
        $rules['role_id'] = 'required|string';
        $rules['name']    = 'string';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $isUser = User::where('email', '=', $request->email)
            ->first();

        if (!$isUser) {

            $user                    = new User;
            $user->name              = $request->get('name');

            $user->service_type         = $request->get('service_type');
            $user->division_id          = $request->get('division_id');
            $user->police_station_id    = $request->get('police_station_id');
            $user->area_id              = $request->get('area_id');

            $user->email             = $request->get('email');
            $user->role_id            = $request->get('role_id');
            $user->password          = bcrypt(123456);
            $user->save();

            $user = User::with('roles')->find($user->id);
            $user->roles()->attach($request->role_id);


            $token = auth()->guard('api')->attempt(['email' => $request->email, 'password' => '123456']);
            return (new RegisterRersource($user))
                ->additional([
                    'token' => $token,
                ]);
        }
        $token = JWTAuth::fromUser($isUser);
        auth()->guard('api')->login($isUser);
        $user = auth('api')->user();
        return (new RegisterRersource($user))
            ->additional([
                'token' => $token,
            ]);
    }
}
