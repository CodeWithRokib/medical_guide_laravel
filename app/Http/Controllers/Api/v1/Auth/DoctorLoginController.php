<?php

namespace App\Http\Controllers\Api\v1\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Enums\RoleType;
use App\Models\DoctorSlot;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorSlotRersource;
use App\Http\Resources\LoginRersource;
use Illuminate\Support\Facades\Validator;


class DoctorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['action']]);
    }

    public function action(Request $request)
    {

        $validator = new LoginRequest();

        $rules             = $validator->rules();
        $rules['email']    = 'required|email';
        $rules['password'] = 'required|string';
        $rules['role_id']  = 'required|string';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $token = auth()->guard('api')->attempt($request->only('email', 'password'));
        if (!$token) {
            return response()->json([
                'data'    => [],
                'message' => 'You try to using invalid email or password',
                'status'  => 401,
            ], 401);
        }

        $user = auth('api')->user();
        $role = $request->role_id;
        if ($role == RoleType::DOCTORS) {
            $allSlots = DoctorSlotRersource::collection( DoctorSlot::where(['doctor_id' => $user->doctor->id])->get());
            $todaySlots = DoctorSlotRersource::collection( DoctorSlot::where(['doctor_id' => $user->doctor->id])->whereDate('created_at', Carbon::today())->get());
        }

        return (new LoginRersource($user))
            ->additional([
                'todaySlots' => $todaySlots,
                'allSlots'   => $allSlots,
                'token'      => $token,
            ]);
    }
}
