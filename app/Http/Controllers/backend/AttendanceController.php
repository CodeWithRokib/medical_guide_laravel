<?php

namespace App\Http\Controllers\backend;

use App\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $attendance = Attendance::paginate(20);
        $employee = Attendance::groupBy('registration_id')->get();
        return view('admin.attendance.attendance',compact('attendance','employee'));
    }

    public function reportAttendance(Request $request){
        $start = $request->start;
        $end = $request->end;

        $reports = Attendance::whereBetween('access_date',[$start,$end]);

        if ($request->registration_id!=1){
            $reports = $reports->where('registration_id',$request->registration_id);
        }
        $sl=0;
        foreach ($reports->orderBy('id','desc')->get() as $key=>$info){
            $data['sl'][$key] = ++$sl;
            $data['registration_id'][$key] = $info->registration_id;
            $data['user_name'][$key] = $info->user_name;
            $data['date'][$key] = Carbon::parse($info->access_date)->format('M-d-Y');
            $data['time'][$key] = Carbon::parse($info->access_date)->format('h:i:s A');
        }
        echo json_encode(['report'=>$data]);
    }

}
