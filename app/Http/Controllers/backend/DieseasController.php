<?php

namespace App\Http\Controllers\backend;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DieseasRequest;
use App\Http\Requests\DieseasDuration;
use App\Dieseas;
use App\DurationVaccine;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DieseasController extends Controller
{

    public function index()
    {

       /* if(Gate::allows('IsAdmin')){*/
            $dieseas = Dieseas::all();
            return view('admin.dieseas.add-dieseas',compact('dieseas'));
        /*}
        return redirect()->route('login');*/
    }


    public function store(DieseasRequest $request)
    {
        Dieseas::create($request->all());
        session()->flash('success','Dieseas saved');
        return redirect()->route('dieseas.add');
    }


    public function show($id)
    {
        $dieseas = Dieseas::find($id);
        return view('admin.dieseas.edit-dieseas',compact('dieseas'));
    }

    public function update(Request $request)
    {
        
        
        if($request->usecurrentdieseas!=1){
            $update = Dieseas::find($request->id);
            $update->name = $request->name;
            $update->description = $request->description;
            $update->update();
            session()->flash('success','Dieseas already updated');
            return redirect()->route('dieseas.add');
        }else{
            $this->validate($request,[
                'name'=>'required|unique:dieseas'
            ]);
        }
        
        
        
        
    }

    public function destroy(Request $request)
    {
        $delete = Dieseas::findOrfail($request->id);
        $delete->delete();
    }


    public function vaccineduration(){
        $purchases = Purchase::query()->where('product_type','vaccine')->groupBy('product_id')->get();
        $products = Product::query()->where('product_type','vaccine')->pluck('name','id');
//        dd($products);
        $durationvaccine = DurationVaccine::all();

        return view('admin.dieseas.add-vaccine-duration',compact('durationvaccine','products','purchases'));
    }

    /* vaccine find*/

    public function durationstore(DieseasDuration $request){
      //  dd($request->all());
        $request->validate([
            'does_number'  => [
                    'required',
                    Rule::unique('durationvaccines')->where(function ($query) use ($request) {
                        return $query->wheredoes_number($request->does_number)->whereproduct_id($request->product_id);
                    }),
                   ],
        ]);

        DurationVaccine::create($request->all());
        session()->flash('success','Dieseas duration saved');
        return redirect()->route('dieseas.duration');
    }


    public function editvaccineduration($id){
        $vaccine_duration = DurationVaccine::find($id);
        $products = Product::whereNotNull('from')->pluck('name','id');
        return view('admin.dieseas.edit-vaccine-duration',compact('vaccine_duration','products'));
    }

    public function updatevaccineduration(DieseasDuration $request,$id){
        $this->validate($request,[
            'product_id'=>['required',Rule::unique('durationvaccines')->ignore($id)]
        ]);
        $update = DurationVaccine::find($id);
        $update->update($request->all());
        session()->flash('success','Schedule duration updated');
        return redirect()->route('dieseas.duration');
    }


    public function durationdestroy(Request $request){
        $delete = DurationVaccine::findOrfail($request->id);
        $delete->delete();
    }


    public function androidapi(){
        $data = Dieseas::all();
        return response()->json($data);
    }


    public function vaccineschedule($vaccine_id){

        $dozes = DurationVaccine::query()->where('product_id',$vaccine_id)->get();
        $data = [];
        $name='';
        $diseas_name = '';
        foreach($dozes as $key => $doze){
//            $diseas_name = $doze->dieseas->name;
            $data[$key]['type'] = $doze->type;
            $data[$key]['duration'] = $doze->does_duration;
            $data[$key]['does_number'] = $doze->does_number;
            $name = $doze->product->name;
        }
        return response()->json(["name"=>$name,"vaccine"=>$data]);
    }

    public function vaccinelist(){
        $products = Product::query()->where('product_type','vaccine')->get();
        $pro = [];
        foreach ($products as $key=>$product){
            $pro[$key]['id']= $product->id;
            $pro[$key]['name']= $product->name;
            $pro[$key]['image']= 'http://vaccinehomebd.com/public/admin/product/upload/'.($product->image!=null ? $product->image : 'noimage.png');
            $pro[$key]['description']= $product->description;
            $pro[$key]['testing']= "testing";
        }
        return response()->json(["vaccinelist"=>$pro]);
    }



}
