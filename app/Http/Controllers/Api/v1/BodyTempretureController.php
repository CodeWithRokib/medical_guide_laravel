<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\BpTracker;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\GlucoseTracker;
use App\Http\Resources\BpResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\GlueCoseResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\HealthProfileRequest;
use App\Http\Resources\BodyTempretureResource;
use App\Models\BodyTracker;

class BodyTempretureController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {
        $validator = new HealthProfileRequest();

        $rules             = $validator->rules();
        $rules['user_id']  = 'required|integer';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        if($request->from && $request->to){
            $body =  BodyTempretureResource::collection(BodyTracker::where('user_id',$request->user_id)->whereBetween('date',[$request->from,$request->to])->latest()->get());
        }else{
            $body =  BodyTempretureResource::collection(BodyTracker::where('user_id',$request->user_id)->latest()->get());
        }
        return response()->json([
            'data'    => $body,
            'message' => '',
            'status'  => 200,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = new HealthProfileRequest();

        $rules                     = $validator->rules();
        $rules['user_id']          = 'required|integer';
        $rules['date']             = 'required';
        $rules['body_temperature'] = 'required';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $body = new BodyTempretureResource(BodyTracker::create($request->all()));
        return response()->json([
            'data'    => $body,
            'message' => '',
            'status'  => 200,
        ], 200);
    }



}
