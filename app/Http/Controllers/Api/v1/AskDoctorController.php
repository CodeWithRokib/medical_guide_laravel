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
use App\Http\Resources\AskDoctorResource;
use App\Http\Resources\UserServiceResource;
use App\Http\Resources\HealthProfileResource;
use App\Models\AskDoctor;

class AskDoctorController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {
        $askDoctor =  AskDoctorResource::collection(AskDoctor::whereNotNull('ans')->latest()->get());
        return response()->json([
            'data'    => $askDoctor,
            'message' => '',
            'status'  => 200,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = new HealthProfileRequest();

        $rules                     = $validator->rules();
        $rules['user_id']          = 'nullable|integer';
        $rules['question_user_id'] = 'nullable|integer';
        $rules['question']         = 'nullable|string';
        $rules['ans']              = 'nullable|string';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $askDoctor = new AskDoctorResource(AskDoctor::create($request->all()));
        return response()->json([
            'data'    => $askDoctor,
            'message' => '',
            'status'  => 200,
        ], 200);
    }



}
