<?php

namespace App\Http\Controllers\backend;

use App\Enums\RoleType;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\HealthProfile;
use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserServiceRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusChangeRequest;
use App\Http\Requests\HealthProfileRequest;
use App\Http\Resources\UserServiceResource;
use App\Http\Resources\HealthProfileResource;

class HealthProfileController extends Controller
{



    public function index(Request $request)
    {
        if (auth()->user()->role_id == RoleType::USER) {
            $healthprofiles = HealthProfile::where('user_id', auth()->user()->id)->get();
        } else {
            $healthprofiles = HealthProfile::all();
        }
        return view('admin.health-profile.add', compact('healthprofiles'));
    }


}
