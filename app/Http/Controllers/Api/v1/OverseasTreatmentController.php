<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OverseasTreatmentRequest;
use App\Models\OverseasTreatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OverseasTreatmentController extends Controller
{
   public function store(Request $request){
    $validator = new OverseasTreatmentRequest();
    $rules             = $validator->rules();
    $rules['name']  = 'required';
    $rules['phone']  = 'required';
    $rules['email']  = 'required';
    $rules['type']  = 'required';
    $rules['passport_copy']  = 'required';
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        return response()->json([
            'status'  => 422,
            'message' => $validator->errors(),
        ], 422);
    }


    $overseas = $request->all();
    if($request->hasFile('passport_copy')){
        $overseas['passport_copy'] = uploadFile($request->file('passport_copy'),'passport');
    }
    if($request->hasFile('previous_report')){
        $overseas['previous_report'] = uploadFile($request->file('previous_report'),'report');
    }
    if($request->hasFile('previous_prescription')){
        $overseas['previous_prescription'] = uploadFile($request->file('previous_prescription'),'report');
    }
    if($request->hasFile('ticket_upload')){
        $overseas['ticket_upload'] = uploadFile($request->file('ticket_upload'),'tickets');
    }

    $response =OverseasTreatment::create($overseas);
    if($response){
        return response()->json([
            'data'    => $response,
            'message' => 'overseas treatment saved successfully',
            'status'  => 200,
        ], 200);
    }else{
        return response()->json([
            'data'    => null,
            'message' => 'overseas treatment not saved successfully',
            'status'  => 422,
        ], 422);
    }
   }
}
