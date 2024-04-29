<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\ServiceType;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserServiceRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusChangeRequest;
use App\Http\Resources\AskDoctorResource;
use App\Http\Resources\UserServiceResource;
use App\Models\AskDoctor;

class UserServiceController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {
        $validator = new UserServiceRequest();

        $rules                 = $validator->rules();
        $rules['user_id']      = 'required|integer';
        $rules['status']       = 'required|integer';
        $rules['service_type'] = 'required|integer';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        if ($request->service_type == ServiceType::ASK_DOCTOR) {
            $userServices = AskDoctorResource::collection(app(UserService::class)->index($request));
        } else {
            $userServices = UserServiceResource::collection(app(UserService::class)->index($request));
        }
        return response()->json([
            'data'    => $userServices,
            'message' => '',
            'status'  => 200,
        ], 200);
    }


    public function statusChange(Request $request)
    {

        $validator = new StatusChangeRequest();

        $rules                 = $validator->rules();
        $rules['user_id']      = 'required|integer';
        $rules['status']       = 'required|integer';
        $rules['service_type'] = 'required|integer';
        $rules['id']           = 'required|integer';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $userServices = new UserServiceResource(app(UserService::class)->statusChange($request));
        return response()->json([
            'data'    => $userServices,
            'message' => 'Order Accepted',
            'status'  => 200,
        ], 200);
    }

    public function askdoctorans(Request $request)
    {
        $askdoctor = AskDoctor::where('id', $request->id)->update([
            'ans'     => $request->ans,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'data'    => [],
            'message' => 'success',
            'status'  => 200,
        ], 200);
    }
}
