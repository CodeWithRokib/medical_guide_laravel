<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Doctor;
use App\Models\Product;
use App\Models\Division;
use App\Models\Hospital;
use App\Enums\SlotStatus;
use App\Models\Ambulance;
use App\Models\BloodBank;
use App\Models\DoctorSlot;
use App\Models\HealthTips;
use App\Models\Specialist;
use App\Models\Virtuallab;
use App\Models\SlotBooking;
use Illuminate\Http\Request;
use App\Models\HealthProfile;
use App\Models\PoliceStation;
use App\Models\OverseasTreatment;
use App\Http\Requests\BookSlotRequest;
use App\Http\Requests\FindSlotRequest;

class FrontEndController extends Controller
{
    public $data = [];


    public function index()
    {
        $this->data['healthips'] = HealthTips::all();
        $this->data['doctors'] = Doctor::with('user', 'hospital', 'specialist')->get();
        return view('frontEnd.layout.home', $this->data);
    }



    public function service()
    {
        return view('frontEnd.service.service');
    }

    public function about()
    {
        return view('frontEnd.about.about');
    }

    public function team()
    {
        return view('frontEnd.team.team');
    }

    public function gallery()
    {
        return view('frontEnd.gallery.gallery');
    }

    public function blog()
    {
        return view('frontEnd.blog.blog');
    }

    public function blogRightSidebar()
    {
        return view('frontEnd.blog.blog_right_sideBar');
    }

    public function blogDetails()
    {
        return view('frontEnd.blog.blog_details');
    }

    public function contact()
    {
        return view('frontEnd.contact.contact');
    }

    public function ambulance()
    {
        $ambulance = Ambulance::all();
        $divisions = Division::all();
        $policeStation = PoliceStation::all();
        $area = Area::all();
        return view('frontEnd.ambulance.ambulance', compact('ambulance', 'divisions', 'policeStation', 'area'));
    }

    public function bloodBank()
    {
        $divisions = Division::all();
        $policeStation = PoliceStation::all();
        $area = Area::all();
        return view('frontEnd.bloodBanke.bloodBanke', compact('divisions', 'policeStation', 'area'));
    }


    public function healthProfile()
    {
        if (auth()->user()) {
            $this->data['healthprofile'] = HealthProfile::where('user_id', auth()->user()->id)->first();
            return view('frontEnd.healthProfile.index', $this->data);
        }else{
            return redirect(route('login'));
        }
    }

    public function health_profile_store(Request $request)
    {
        $healthprofile = HealthProfile::updateOrCreate(
            ['id' => auth()->user()->id],$request->except('_token')+['user_id' => auth()->user()->id]   
        );
        return redirect(route('turag'));
    }

    public function doctorAppoinment()
    {
        $this->data['specialists'] = Specialist::all();
        return view('frontEnd.doctorAppoinment.index', $this->data);
    }


    public function getDoctor(Request $request)
    {
        $specialists = Doctor::with('user')
            ->where('specialist_id', $request->specialist_id)
            ->get();
        $specialistsData = $specialists->map(function ($specialist) {
            return [
                'id' => $specialist->id,
                'name'      => optional($specialist->user)->name,
            ];
        });
        return response()->json($specialistsData);
    }

    public function findslot(FindSlotRequest $request)
    {
        session()->put('userdoctorappoinment', $request->except('_token'));
        return redirect()->route('appoinment');
    }

    public function appoinment()
    {
        if (session()->has('userdoctorappoinment')) {
            $this->data['slots'] =  DoctorSlot::where(['doctor_id' => session('userdoctorappoinment')['doctor_id'], 'date' => date('Y-m-d', strtotime(session('userdoctorappoinment')['date'])), 'status' => SlotStatus::UNCONFIRM])->get();
            return view('frontEnd.doctorAppoinment.appoinment', $this->data);
        }
        return redirect()->route('doctor_appoinment');
    }



    public function booknow(BookSlotRequest $request)
    {

        if (session()->has('userdoctorappoinment')) {
            $bookingSlot = SlotBooking::create($request->except('_token') + ['doctor_id' => session('userdoctorappoinment')['doctor_id']]);
            if ($bookingSlot) {
                $doctorSlotUpdate = DoctorSlot::where(['id' => $request->doctor_slot_id, 'doctor_id' => session('userdoctorappoinment')['doctor_id']])->update([
                    'status' => SlotStatus::CONFIRM
                ]);
            }
            session()->forget('userdoctorappoinment');
            return redirect()->route('confirmation');
        }
        return redirect()->route('doctor_appoinment');
    }

    public function confirmation()
    {
        return view('frontEnd.doctorAppoinment.confirmation');
    }


    public function healthTips()
    {
        $healthips = HealthTips::all();
        return view('frontEnd.healthTips.healthTips', compact('healthips'));
    }

    public function hospitalInformation()
    {
        $hospital = Hospital::all();
        $divisions = Division::latest()->get();
        return view('frontEnd.hospital.hospital', compact('divisions', 'hospital'));
    }

    public function hospitalDetails($id)
    {
        $hospital = Hospital::find($id);
        return view('frontEnd.hospital.hospital-details', compact('hospital'));
    }

    public function medicine()
    {
        return view('frontEnd.medicine.medicine');
    }

    public function overseasTreatment()
    {
        $divisions = Division::all();
        $policeStation = PoliceStation::all();
        $area = Area::all();
        $overseasTreatment = OverseasTreatment::all();
        return view('frontEnd.overseasTreatment.overseasTreatment', compact('divisions', 'policeStation', 'area'));
    }

    public function vaccine()
    {
        $product = Product::all();
        return view('frontEnd.vaccine.vaccine', compact('product'));
    }


    public function virtualLab()
    {
        $virtuallabs = Virtuallab::all();
        $divisions = Division::all();
        $policeStation = PoliceStation::all();
        $area = Area::all();
        return view('frontEnd.virtualLab.virtualLab', compact('virtuallabs', 'divisions', 'policeStation', 'area'));
    }


    public function bookAnAppointment()
    {
        $specialist = Specialist::all();
        $doctor = Doctor::all();
        return view('frontEnd.bookAnAppointment.bookAnAppointment', compact('specialist', 'doctor'));
    }


    public function doctorProdile()
    {
        return view('frontEnd.doctorProdile.doctorProdile');
    }


    public function storeAmbulance(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string|unique:ambulances',
        ]);
        $data = $request->except('_token');
        Ambulance::create($data);
        return redirect(route('ambulance'))->withSuccess('Ambulance has store successfully complete');
    }


    public function saveOverseasTreatment(Request $request)
    {
        $request->validate([
            'name'              => 'required|string',
            'type'              => 'nullable|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string|unique:overseas_treatments',
        ]);
        $data = $request->except('_token');
        OverseasTreatment::create($data);
        session()->flash('success', 'Overseas Treatment has store successfully complete');
        return back();
    }


    public function virtualLabSave(Request $request)
    {
        $request->validate([
            'name'              => 'required|string',
            'type'              => 'nullable|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric',
            'phone'             => 'required|string|unique:virtuallabs',
        ]);
        $data = $request->except('_token');
        Virtuallab::create($data);
        session()->flash('success', 'Virtual Lab has store successfully complete');
        return back();
    }


    public function saveBloodBank(Request $request)
    {
        $request->validate([
            'phone'             => 'required|string',
            'division_id'       => 'required|numeric',
            'police_station_id' => 'required|numeric',
            'area_id'           => 'required|numeric'
        ]);

        $data = $request->except('_token');
        BloodBank::create($data);

        session()->flash('success', 'Blood bank successfully added');
        return back();
    }
}
