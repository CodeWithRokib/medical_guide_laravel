<?php

namespace App\Http\Controllers\frontend;

use App\Contact;
use App\Wishlist;
use DB;
use App\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dieseas;
use App\Product;
use App\DurationVaccine;
use App\Hospital;
use App\Doctor;
use App\About;
use App\Service;
use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{
    public function index(){
        $title = DB::table('homepages')->where('id', '1')->value('title');
        $description = DB::table('homepages')->where('id', '1')->value('description');
        $video = DB::table('homepages')->where('id', '1')->value('video');
        $products = Product::whereproduct_type('vaccine')->get();
        return view('frontEnd.index',compact('products','title','description','video'));
    }

    public function doctorlist(){
        $hospitals = Hospital::all();
        return view('frontEnd.doctors',compact('hospitals'));
    }

    public function doctorprofile($id){
        $doctor = Doctor::findOrFail($id);

        return view('frontEnd.profile-doctor',compact('doctor'));
    }

    public function products(){
        $products = Product::whereStatus(1)->paginate(12);
        return view('frontEnd.products',compact('products'));
    }

    public function about(){
        $about = About::latest()->first();
        return view('frontEnd.about',compact('about'));
    }

    public function service(){
        $services = Service::all();
        return view('frontEnd.service',compact('services'));
    }

    public function serviceVisit($id){
        $service = Service::find($id);
        return view('frontEnd.visit-service',compact('service'));
    }

    public function DieseasProducts($id){
        $dieseasproduct = Product::where('dieseas_id',$id)->get();
        return view('frontEnd.dieseas-product',compact('dieseasproduct'));
    }

    public function SingleProduct($id){
        $singleproduct = Product::findOrFail($id);
        $dieseas = Dieseas::all();
        $relates = Product::all();
        return view('frontEnd.single-product',compact('singleproduct','relates','dieseas'));
    }

    public function contactus(){
        $contacts = Contact::all();
        return view('frontEnd.contact',compact('contacts'));
    }

    public function profile(){
        $prod = Product::paginate(8);
        return view('frontEnd.profile',compact('prod'));
    }
    public function wish(){
        //

    }
    public function login(Request $request){

        Auth::user()->pin;
        return redirect('/home');
    }
}
