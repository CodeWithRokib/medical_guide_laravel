<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\VaccineRequest;
use App\Models\Product;
use App\Models\VaccineOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VaccineController extends Controller
{
    public function index(){
        $response = Product::query()->where('product_type','vaccine')->get();
        if($response){
            return response()->json([
                'data'    => $response,
                'message' => 'vaccine list',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'data'    => null,
                'message' => 'not found',
                'status'  => 422,
            ], 422);
        }
    }

    public function order(Request $request){
        $validator = new VaccineRequest();
        $rules             = $validator->rules();
        $rules['name']  = 'required';
        $rules['phone']  = 'required';
        $rules['email']  = 'required';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        $vaccine = $request->all();
        if($request->hasFile('upload_prescription')){
            $vaccine['upload_prescription'] = uploadFile($request->file('upload_prescription'),'report');
        }
        $response =VaccineOrder::create($vaccine);
        if($response){
            return response()->json([
                'data'    => $response,
                'message' => 'order saved successfully',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'data'    => null,
                'message' => 'order not saved successfully',
                'status'  => 422,
            ], 422);
        }
    }
}
