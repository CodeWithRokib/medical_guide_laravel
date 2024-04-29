<?php

namespace App\Http\Controllers\backend;

use App\Product;
use App\Specialist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Dieseas;
use App\DurationVaccine;
use App\Doctor;
use App\Certification;
use App\Hospital;
use App\Models\Purchase;
use App\Models\Sale;
use Carbon\Carbon;
use App\Warehouse;
use App\Company;
use App\Supplier;
use Illuminate\Support\Facades\Auth;

class VaccineApplyController extends Controller
{
    public function index(){
        $this->checkpermission('PatientManagement/vaccie-apply');
        $doctors = Doctor::select("name","id","phone")->get();
        $appliers = Patient::all();
        $products = Product::query()->where('product_type','vaccine')->pluck('name','id');
//        $products = Purchase::groupBy('product_id')->where('product_type','vaccine')->get();
        $specialists = Specialist::pluck('name','id');
        $hospitals = Hospital::pluck('name','id');

        return view('admin.patient.vaccine-apply',compact('doctors','appliers','products','specialists','hospitals'));
    }

    public function AppliedInfo(Request $request){
        $info = Sale::where("product_id",$request->product_id)->where("patient_id",$request->patient_id)->orderBy('does_no',"desc")->first();
       // $info = Sale::select("product_id","patient_id","dieseas_id","s")
       //$purchases = Purchase::where('warehouse_id',Auth::user()->warehouse_id)->selectRaw('sum(qty) as total, product_id')->groupBy('product_id')->get();
        $summary = [];
        if($info){
          //  $summary["name"] = $info->patient->name;
            $summary["phone"] = $info->patient->phone;
            $summary["dieseas"] = $info->dieseas->name;
            $summary["product"] = $info->product->name;
            $summary["dose"] = $info->does_no;
            $summary["date"] = Carbon::parse($info->created_at)->toDateString();
            return json_encode($summary);
        }else{
            $summary["phone"] = $summary["dieseas"] =  $summary["product"] = $summary["dose"] =  $summary["date"] = "";
            return json_encode($summary);
        }
    }

    public function getMrp(Request $request){
//        $getmrp = Product::find($request->id);
        $getmrp = Purchase::query()->where('product_id',$request->id)->latest()->first();
        return $getmrp;
    }

    public function bulkvaccine(){
        $warehouse = Warehouse::pluck('name','id');
        $company = Company::pluck('name','id');
        $dieseas = Dieseas::pluck('name','id');
        $supplier = Supplier::pluck('name','id');

        $product = Product::query()->where('product_type','vaccine')->pluck('name','id');
        return view('admin.patient.bulk-vaccine-sale',compact('company','dieseas','warehouse','supplier','product'));
    }


}
