<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use App\Models\Specialist;

class DoctorsController extends Controller {
  use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function specialist()
    {
      $specialist= Specialist::all(['id','name']);;
       return response()->json([
            'data'    => $specialist,
            'message' => '',
            'status'  => 200,
        ], 200);
    }
    public function specialistDoctors($specialist_id=null)
    {
        if($specialist_id){
            $specialist= Doctor::with('user','hospital')->where('specialist_id',$specialist_id)->get();
        }else{
            $specialist= Doctor::with('user','hospital')->get();
        }
      if($specialist){
        return response()->json([
            'data'    => $specialist,
            'message' => '',
            'status'  => 200,
        ], 200);
      }else{
        return response()->json([
            'data'    => null,
            'message' => 'data not found',
            'status'  => 404,
        ], 404);
      }

    }

    public function doctorDetails($doctor_id)
    {
      $doctors= Doctor::with('user','hospital','specialist')->where('id',$doctor_id)->get();
      if($doctors){
        return response()->json([
            'data'    => $doctors,
            'message' => '',
            'status'  => 200,
        ], 200);
      }else{
        return response()->json([
            'data'    => null,
            'message' => 'data not found',
            'status'  => 404,
        ], 404);
      }
    }

}
