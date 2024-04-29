<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Doctor;
use App\Enums\SlotStatus;
use App\Models\DoctorSlot;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorRersource;
use App\Http\Requests\DoctorSlotRequest;
use App\Http\Requests\SlotBookingRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\DoctorSlotRersource;
use App\Http\Resources\UserServiceResource;
use App\Models\SlotBooking;

class DoctorSlotController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }


    public function index(Request $request)
    {
        $validator = new DoctorSlotRequest();

        $rules              = $validator->rules();
        $rules['doctor_id'] = 'required|integer';
        $rules['date']      = 'required';
        $rules['slot_from'] = 'required';
        $rules['slot_to']   = 'required';


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $doctorSlot =  DoctorSlot::query()->create($request->all() + ['status' => SlotStatus::UNCONFIRM]);
        return response()->json([
            'data'    => $doctorSlot,
            'message' => '',
            'status'  => 200,
        ], 200);
    }

    public function update(Request $request)
    {
        $validator = new DoctorSlotRequest();

        $rules              = $validator->rules();
        $rules['id']        = 'required|integer';
        $rules['doctor_id'] = 'required|integer';
        $rules['date']      = 'required';
        $rules['slot_from'] = 'required';
        $rules['slot_to']   = 'required';


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }
        $id=$request->id;
        $data=$request->except('id');
        $doctorSlot =  DoctorSlot::where('id',$id)->update($data);
        return response()->json([
            'data'    => $doctorSlot,
            'message' => '',
            'status'  => 200,
        ], 200);
    }

    public function delete($id){
        $doctorSlot =  DoctorSlot::query()->where('id',$id)->delete();
        return response()->json([
            'data'    => $doctorSlot,
            'message' => '',
            'status'  => 200,
        ], 200);
    }


    public function todaySlot(Request $request)
    {
        $todaySlots = DoctorSlotRersource::collection( DoctorSlot::where(['doctor_id' => $request->id])->whereDate('created_at', Carbon::today())->get());
        if($todaySlots){
            return response()->json([
                'data'    => $todaySlots,
                'message' => '',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'status'  => 422,
                'message' => 'Slot Not Found',
            ], 422);
        }

    }

    public function allSlot(Request $request)
    {
        $allSlots = DoctorSlotRersource::collection( DoctorSlot::where(['doctor_id' => $request->id])->get());
        if($allSlots){
            return response()->json([
                'data'    => $allSlots,
                'message' => '',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'status'  => 422,
                'message' => 'Slot Not Found',
            ], 422);
        }

    }

    public function doctorList(Request $request)
    {
        $doctors = DoctorRersource::collection( Doctor::with('user','hospital','specialist')->get());
        if($doctors){
            return response()->json([
                'data'    => $doctors,
                'message' => '',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'status'  => 422,
                'message' => 'Doctor Not Found',
            ], 422);
        }

    }


    public function findSlot(Request $request)
    {
        $doctorSlot = DoctorSlotRersource::collection( DoctorSlot::where(['doctor_id' => $request->doctor_id,'date' => $request->date,'status' => SlotStatus::UNCONFIRM])->get());
        if($doctorSlot){
            return response()->json([
                'data'    => $doctorSlot,
                'message' => '',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'status'  => 422,
                'message' => 'Doctor Slot Not Found',
            ], 422);
        }

    }


    public function slotBooking(Request $request)
    {
        $validator = new SlotBookingRequest();

        $rules                   = $validator->rules();
        $rules['doctor_id']      = 'required';
        $rules['doctor_slot_id'] = 'required';
        $rules['type']           = 'required';
        $rules['gender']         = 'required';
        $rules['name']           = 'required|string';
        $rules['age']            = 'required|string';
        $rules['weight']         = 'nullable|string';
        $rules['location']       = 'nullable|string';

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'  => 422,
                'message' => $validator->errors(),
            ], 422);
        }

        $bookingSlot = SlotBooking::create($request->all());
        if($bookingSlot){
            $doctorSlotUpdate = DoctorSlot::where(['id' => $request->doctor_slot_id,'doctor_id' => $request->doctor_id])->update([
                'status' => SlotStatus::CONFIRM
            ]);
        }
        if($doctorSlotUpdate){
            return response()->json([
                'data'    => [],
                'message' => 'Slot Booking Successfully',
                'status'  => 200,
            ], 200);
        }else{
            return response()->json([
                'status'  => 422,
                'message' => 'Not Slot Booking Successfully ',
            ], 422);
        }

    }
}
