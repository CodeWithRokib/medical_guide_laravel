<?php


namespace App\Http\Services;


use App\Models\User;
use App\Models\Ambulance;
use App\Models\AskDoctor;
use App\Enums\ServiceType;
use App\Models\Virtuallab;
use App\Models\OverseasTreatment;

class UserService
{
    public function index($request)
    {
        $user = User::find($request->user_id);
        if (!blank($user)) {
            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::VIRTUAL_LAB) {
                return Virtuallab::where([
                    'division_id'       => $user->division_id,
                    'police_station_id' => $user->police_station_id,
                    'area_id'           => $user->area_id,
                    'status'            => $request->status,
                ])->get();
            }

            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::OVERSEAS_TREATMENT) {
                return OverseasTreatment::where([
                    'division_id'       => $user->division_id,
                    'police_station_id' => $user->police_station_id,
                    'area_id'           => $user->area_id,
                    'status'            => $request->status,
                ])->get();
            }

            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::AMBULANCE) {
                return Ambulance::where([
                    'division_id'       => $user->division_id,
                    'police_station_id' => $user->police_station_id,
                    'area_id'           => $user->area_id,
                    'status'            => $request->status,
                ])->get();
            }

            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::ASK_DOCTOR) {
                return AskDoctor::whereNull('ans')->latest()->get();
            }
        }
    }

    public function statusChange($request)
    {
        $user = User::find($request->user_id);
        if (!blank($user)) {
            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::VIRTUAL_LAB) {
                $virtualLab = Virtuallab::find($request->id);
                if (!blank($virtualLab)) {
                    $virtualLab->status = $request->status;
                    $virtualLab->save();
                    return $virtualLab;
                }
            }

            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::OVERSEAS_TREATMENT) {
                $overseas_treatment = OverseasTreatment::find($request->id);
                if (!blank($overseas_treatment)) {
                    $overseas_treatment->status = $request->status;
                    $overseas_treatment->save();
                    return $overseas_treatment;
                }
            }

            if ($user->service_type == $request->service_type && $request->service_type == ServiceType::AMBULANCE) {
                $ambulance = Ambulance::find($request->id);
                if (!blank($ambulance)) {
                    $ambulance->status = $request->status;
                    $ambulance->save();
                    return $ambulance;
                }
            }
        }
    }
}
