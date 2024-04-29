<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Blog;
use App\Models\User;
use App\Models\About;
use App\Models\Doctor;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\Ambulance;
use App\Models\BloodBank;
use App\Models\Specialist;
use App\Models\Virtuallab;
use App\Models\PoliceStation;
use App\Models\DoctorHospital;
use App\Models\HealthTips;
use App\Models\OverseasTreatment;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Resources\AreaResource;
use App\Http\Resources\VaccineResource;
use App\Http\Resources\DivisionResource;
use App\Http\Resources\MedicineResource;
use App\Http\Resources\RhFectorResource;
use App\Http\Resources\BloodBankResource;
use App\Http\Resources\AmbulenceRersource;
use App\Http\Resources\BloodGroupResource;
use App\Http\Resources\ForeignDoctorResource;
use App\Http\Resources\HealthTipsResource;
use App\Http\Resources\HospitalResource;
use App\Http\Resources\LocalDoctorResource;
use App\Http\Resources\VirtualLabResource;
use App\Http\Resources\ServiceTypeResource;
use App\Http\Resources\PolicestationResource;
use App\Http\Resources\OverseasTreatmentResource;
use App\Models\VaccineOrder;

class ApiController extends Controller
{

    use ApiResponse;

    // Hospital Management

    public function hospitals()
    {
        $hospitals = Hospital::all();
        return $this->successResponse(['status' => 200, 'hospitals' =>  HospitalResource::collection($hospitals)]);
    }


    // Blood Bank Management

    public function bloodbanks()
    {
        return BloodBankResource::collection(BloodBank::get());
    }

    public function bloodbankSearch(Request $request)
    {

        if($request->all()){
            $blooBankdList = BloodBank::where([
                'division_id'       => $request->division_id,
                'police_station_id' => $request->police_station_id,
                'area_id'           => $request->area_id,
                'blood_group'       => $request->blood_group,
                'rh_fector'           => $request->rh_fector,
            ])->get();
        }
        return $this->successResponse(['status' => 200, 'bloodBankSearch' =>  BloodBankResource::collection($blooBankdList)]);

    }


    // Ambulance Management

    public function ambulances()
    {
        $all_ambulances = Ambulance::all();
        return response()->json($all_ambulances);
    }

    public function storeAmbulance(Request $request)
    {
        $ambulance = Ambulance::create($request->all());
        if (!blank($ambulance)) {
            return $this->successResponse(['status' => 200, 'ambulance' => new AmbulenceRersource($ambulance)]);
        }
        return $this->successResponse(['status' => 401, 'message' => "Something Wrong !"]);
    }


    // Division Management

    public function areaManagement()
    {
        return [
            $this->successResponse([
                'status'         => 200,
                'divisions'      => DivisionResource::collection(Division::get()),
                'policestations' => PolicestationResource::collection(PoliceStation::get()),
                'areas'          => AreaResource::collection(Area::get()),
                'bloodgroup'     => new BloodGroupResource(trans('bloodgroup')),
                'rhfector'     => new BloodGroupResource([
                    '+(Ve)' => 1,
                    '-(ve)' => 2,
                ]),
                'serviceType'     => new ServiceTypeResource(
                    [
                        'CT scan'     => 1,
                        'Blood Group' => 2,
                        'CVC'         => 3,
                    ]
                ),
            ]),
        ];
    }

    // Police Stations Management

    public function policestations()
    {
        return $this->successResponse(['status' => 200, 'policestations' => PolicestationResource::collection(PoliceStation::get())]);
    }

    // area Management

    public function areas()
    {
        return AreaResource::collection(Area::get());
        return $this->successResponse(['status' => 200, 'areas' => AreaResource::collection(Area::get())]);
    }

    // Doctor Management

    public function doctors()
    {

        $local_doctors = Specialist::with(array('doctors' => function ($query) {
            $query->where('type', 'Local');
        }))->get();

        $foreign_doctors = Specialist::with(array('doctors' => function ($query) {
            $query->where('type', 'Foreign');
        }))->get();

        return [
            $this->successResponse([
                'status'         => 200,
                'localDoctors'   => LocalDoctorResource::collection($local_doctors),
                'foreignDoctors' => LocalDoctorResource::collection($foreign_doctors),
            ]),
        ];
    }

    // Product Management

    public function vaccineProducts()
    {
        $vaccine_products = Product::where('product_type', 'vaccine')->get();
        return $this->successResponse(['status' => 200, 'vaccine' =>  VaccineResource::collection($vaccine_products)]);
    }

    public function vaccineProductsOrder(Request $request)
    {
        $vaccine_products_order = VaccineOrder::create($request->all());
        return $this->successResponse(['status' => 200, 'vaccineOrder' => 'Successfully Order Send']);
    }


    public function medicine()
    {
        $medicine = Product::where('product_type', 'other')->get();
        return $this->successResponse(['status' => 200, 'medicine' =>  MedicineResource::collection($medicine)]);
    }



    // Brand / Company Management

    public function brands()
    {
        $all_brands = Company::all();
        return response()->json($all_brands);
    }

    public function healthTips()
    {
        return $this->successResponse(['status' => 200, 'healthTips' => HealthTipsResource::collection(HealthTips::orderBy('id', 'desc')->get())]);
    }



    public function hospitalDoctor($id)
    {

        $doctors = Hospital::findOrFail($id);

        foreach ($doctors->doctors as $info) {
            dd(["result" => $info->name]);
        }
    }

    public function corporatePrograms()
    {
        $cliets = Blog::all();
        if ($cliets->count() > 0) {
            $sl = 0;
            foreach ($cliets as $key => $info) {
                $data[$key]['sl'] = ++$sl;
                $data[$key]['name'] = $info->name;
                $data[$key]['description'] = $info->description;
            }
            return json_encode(['success' => $data]);
        }
    }
    public function about_us_api()
    {
        $about = About::latest()->first();
        $data = ['about_description' => $about->name];
        return json_encode(['success' => $data]);
    }

    public function corporateclients()
    {

        $invoices = Invoice::where('customer_type', 1)->get();

        $corporate = [];
        $data = [];

        foreach ($invoices as $key => $invo) {
            $data[$key]['name'] = $invo->patient->name;
            $data[$key]['father'] = $invo->patient->father;
            $data[$key]['mother'] = $invo->patient->mother;
            $data[$key]['phone'] = $invo->patient->phone;
        }

        $corporate['corporate'] = $data;
        return $corporate;
    }


    public function all_patients()
    {
        $patients = User::query()->where('pin', '!=', 0)->get(['id']);
        return ['client_info' => $patients];
    }

    public function get_pin($id)
    {
        $user_pin = User::query()->findOrFail($id)->pin;
        $pin = ['pin' => $user_pin];
        return json_encode($pin);
    }

    public function androidapispecialist($hospital_id)
    {
        $data = [];
        $specialist = Hospital::query()->where('id', $hospital_id)->first();


        if ($specialist->count() > 0) {
            foreach ($specialist->doctors as $doctor) {
                array_push($data, ['doctor_name' => $doctor->name, 'specialist' => $doctor->specialist->name]);
            }
            return json_encode($data);
        } else {
            echo json_encode(['result' => "No Data Found"]);
        }
    }


    public function androidapi()
    {

        $hospitals = Hospital::all();
        $data = [];

        if ($hospitals->count() > 0) {
            foreach ($hospitals as $key => $list) {
                $data[$key]['id'] = $list->id;
                $data[$key]['name'] = $list->name;
            }
            echo json_encode(['result' => $data]);
        } else {
            echo json_encode(['result' => "No Data Found"]);
        }
    }

    public function api_departmentOfHospital($id)
    {
        $department = Specialist::where('hospital_id', $id)->get();

        if ($department->count() > 0) {
            foreach ($department as $key => $list) {
                $data[$key]['id'] = $list->id;
                $data[$key]['hospital_id'] = $list->hospital_id;
                $data[$key]['name'] = $list->name;
            }
            echo json_encode(['result' => $data]);
        } else {
            echo json_encode(['result' => "No Data Found"]);
        }
    }

    public function api_doctorsList($hospital_id, $specialist_id)
    {
        $doctors = Doctor::where('hospital_id', $hospital_id)->where('specialist_id', $specialist_id)->get();

        if ($doctors->count() > 0) {
            foreach ($doctors as $key => $doctor) {
                $data[$key]['id'] = $doctor->id;
                $data[$key]['hospital'] = $doctor->hospital ? $doctor->hospital->name : " Nothing Found";
                $data[$key]['specialist'] = $doctor->hospital ? $doctor->specialist->name : " Nothing Found";
                $data[$key]['name'] = $doctor->name;
                $data[$key]['description'] = $doctor->description ? $doctor->description : ' N / A';
                $data[$key]['image'] = $doctor->image != null ? asset('public/admin/product/upload/' . $doctor->image) : ($doctor->gender == 0 ? url('public/admin/male-doctor.jpg') : url('public/admin/female-doctor.jpg'));
            }

            echo json_encode(['result' => $data]);
        } else {
            $data[0]["description"] = " No Data Found";
            echo json_encode(['result' => $data]);
        }
    }


    public function api_department($id)
    {
        dd($id);
    }

    public function bloodbankStore(Request $request)
    {

        $bloodbank = BloodBank::create($request->all());
        if (!blank($bloodbank)) {
            return $this->successResponse(['status' => 200, 'bloodbank' => new BloodBankResource($bloodbank)]);
        }
        return $this->successResponse(['status' => 401, 'message' => "Something Wrong !"]);
    }

    public function storeVirtuallab(Request $request)
    {

        $virtuallab = Virtuallab::create($request->all());
        if (!blank($virtuallab)) {
            return $this->successResponse(['status' => 200, 'virtuallab' => new VirtualLabResource($virtuallab)]);
        }
        return $this->successResponse(['status' => 401, 'message' => "Something Wrong !"]);
    }
    public function storeOverseastreatment(Request $request)
    {

        $overseastreatment = OverseasTreatment::create($request->all());
        if (!blank($overseastreatment)) {
            return $this->successResponse(['status' => 200, 'overseastreatment' => new OverseasTreatmentResource($overseastreatment)]);
        }
        return $this->successResponse(['status' => 401, 'message' => "Something Wrong !"]);
    }
}
