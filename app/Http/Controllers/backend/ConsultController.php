<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Consult;

class ConsultController extends Controller
{
    public function index(){
        $consults = Consult::all();
        return view('admin.consult.view-consult',compact('consults'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        Consult::create($request->all());
        session()->flash('success','Consult message send successfully complete');
        return redirect()->route('home.contact');
    }
}
