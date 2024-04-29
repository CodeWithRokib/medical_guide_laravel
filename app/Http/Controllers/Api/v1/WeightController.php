<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\HealthProfileRequest;
use App\Http\Resources\WeightResource;
use App\Models\WeightTracker;

class WeightController extends Controller
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
            $body =  WeightResource::collection(WeightTracker::where('user_id',$request->user_id)->whereBetween('date',[$request->from,$request->to])->latest()->get());
        }else{
            $body =  WeightResource::collection(WeightTracker::where('user_id',$request->user_id)->latest()->get());
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

        $rules            = $validator->rules();
        $rules['user_id'] = 'required|integer';
        $rules['date']    = 'required';
        $rules['weight']  = 'required';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $body = new WeightResource(WeightTracker::create($request->all()));
        return response()->json([
            'data'    => $body,
            'message' => '',
            'status'  => 200,
        ], 200);
    }



}
