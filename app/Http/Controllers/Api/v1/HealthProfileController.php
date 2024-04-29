<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\HealthProfile;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserServiceRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusChangeRequest;
use App\Http\Requests\HealthProfileRequest;
use App\Http\Resources\UserServiceResource;
use App\Http\Resources\HealthProfileResource;

class HealthProfileController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {
        $validator = new HealthProfileRequest();

        $rules                 = $validator->rules();
        $rules['user_id']      = 'required|integer';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        $healthprofile = new HealthProfileResource(HealthProfile::where('user_id',$request->user_id)->first());
        return response()->json([
            'data'    => $healthprofile,
            'message' => '',
            'status'  => 200,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = new HealthProfileRequest();

        $rules                 = $validator->rules();
        $rules['user_id']      = 'required|integer';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        
        $healthprofile = new HealthProfileResource(HealthProfile::updateOrCreate(
            ['id' => $request->id],  // Conditions to find the existing record
            $request->except('id')    // Values to update or create
        ));
        return response()->json([
            'data'    => $healthprofile,
            'message' => '',
            'status'  => 200,
        ], 200);
    }



}
