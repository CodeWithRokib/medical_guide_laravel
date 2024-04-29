<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function index(Request $request){

        if($request->from && $request->to){
            $report =  Report::where('user_id',$request->user_id)->whereBetween('date',[$request->from,$request->to])->latest()->get();
        }else{
            $report =  Report::where('user_id',$request->user_id)->latest()->get();
        }
        $report = Report::all();
        return response()->json([
            'data'    => $report,
            'message' => '',
            'status'  => 200,
        ], 200);
    }
    public function store(Request $request){
        $validator = new ReportRequest();

        $rules             = $validator->rules();
        $rules['user_id']  = 'required|integer';
        $rules['date']     = 'required';
        $rules['time']     = 'required';
        $rules['test_name'] = 'required';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }


        $report = new ReportResource(Report::create($request->all()));
        return response()->json([
            'data'    => $report,
            'message' => '',
            'status'  => 200,
        ], 200);
    }
}
