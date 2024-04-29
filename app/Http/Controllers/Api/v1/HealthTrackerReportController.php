<?php

namespace App\Http\Controllers\Api\v1;

use Carbon\Carbon;
use App\Models\BpTracker;
use App\Models\BodyTracker;
use App\Models\DietTracker;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\GlucoseTracker;
use App\Http\Resources\BpResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\DietResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\HealthProfileRequest;
use App\Models\WeightTracker;

class HealthTrackerReportController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {

        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();

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
        $bp               = BpTracker::where('user_id',$request->user_id)->latest()->first();
        $body_temperature = BodyTracker::where('user_id',$request->user_id)->latest()->first();
        $glucoseTracker   = GlucoseTracker::where('user_id',$request->user_id)->latest()->first();

        $diet_avg             = DietTracker::whereBetween('created_at', [$startDate, $endDate])->where('user_id',$request->user_id)->avg('food_qty');
        $bp_avg               = BpTracker::whereBetween('created_at', [$startDate, $endDate])->where('user_id',$request->user_id)->avg('sysotolic');
        $glucose_avg          = GlucoseTracker::whereBetween('created_at', [$startDate, $endDate])->where('user_id',$request->user_id)->avg('test_result');
        $body_temperature_avg = BodyTracker::whereBetween('created_at', [$startDate, $endDate])->where('user_id',$request->user_id)->avg('body_temperature');
        $weight_avg           = WeightTracker::whereBetween('created_at', [$startDate, $endDate])->where('user_id',$request->user_id)->avg('weight');

        return response()->json([
            'blood_pressure'       => !blank($bp) ? $bp->sysotolic : null ,
            'pulse'                => !blank($bp) ? $bp->diastolic : null,
            'body_temperature'     => !blank($body_temperature) ? $body_temperature->body_temperature : null,
            'glucose'              => !blank($glucoseTracker) ?  $glucoseTracker->test_result : null,
            'diet_avg'             => $diet_avg,
            'bp_avg'               => $bp_avg,
            'glucose_avg'          => $glucose_avg,
            'body_temperature_avg' => $body_temperature_avg,
            'weight_avg'           => $weight_avg,
            'status'               => 200,
        ], 200);
    }





}
