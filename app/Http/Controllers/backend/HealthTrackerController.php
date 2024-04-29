<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Enums\RoleType;
use App\Models\BpTracker;
use App\Models\BodyTracker;
use App\Models\DietTracker;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\HealthProfile;
use App\Models\WeightTracker;
use App\Models\GlucoseTracker;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserServiceRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusChangeRequest;
use App\Http\Requests\HealthProfileRequest;
use App\Http\Resources\UserServiceResource;
use App\Http\Resources\HealthProfileResource;
use App\Models\Report;

class HealthTrackerController extends Controller
{



    public function index(Request $request)
    {
        if (auth()->user()->role_id == RoleType::USER) {
            $users = User::where('role_id', RoleType::USER)->where('id', auth()->user()->id)->get();
        } else {
            $users = User::where('role_id', RoleType::USER)->get();
        }
        return view('admin.health-tracker.index', compact('users'));
    }

    public function report(Request $request)
    {

       $reports = Report::get();
        return view('admin.health-tracker.report', compact('reports'));
    }

    public function show($id)
    {
        if (auth()->user()->role_id == RoleType::USER) {
            $diets    = DietTracker::where('user_id', auth()->user()->id)->latest()->get();
            $bps      = BpTracker::where('user_id', auth()->user()->id)->latest()->get();
            $glucoses = GlucoseTracker::where('user_id', auth()->user()->id)->latest()->get();
            $bodys    = BodyTracker::where('user_id', auth()->user()->id)->latest()->get();
            $weight = WeightTracker::where('user_id', auth()->user()->id)->latest()->get();
        } else {
            $diets    = DietTracker::where('user_id', $id)->latest()->get();
            $bps      = BpTracker::where('user_id', $id)->latest()->get();
            $glucoses = GlucoseTracker::where('user_id', $id)->latest()->get();
            $bodys    = BodyTracker::where('user_id', $id)->latest()->get();
            $weight = WeightTracker::where('user_id', $id)->latest()->get();
        }
        return view('admin.health-tracker.show', compact('diets','bps','glucoses','bodys','weight'));
    }
}
