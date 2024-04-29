<?php

namespace App\Http\Controllers;


use App\DurationVaccine;
use App\Patient;
use App\Product;
use App\Models\Sale;
use App\User;
use App\Wishlist;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class AndroidCommonController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Driver and passenger login
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function login(Request $request)
    {

        //dd($request->all());
        $user = User::query()->where('email',$request->email)->orWhere('category',$request->category);
        if($user->exists()){
            if(Hash::check($request->password,$user->first()->password)){
                $user = $user->first();
//                if($request->category == 'driver'){
//                    $packageTypeId = Driver::query()->where('user_id',$user->id)->first()->package_type_id;
//                    //$driver = Driver::query()->where('user_id',$user->id)->first();
//                }else{
//                    $packageTypeId = Passenger::query()->where('user_id',$user->id)->first()->package_type_id;
//                }
                //  return response(["success"=>1,"message"=>"Login is successful","info"=>["id"=>$user->id,"name"=>$user->name,"number"=>$user->number]]);
                return response([
                    "success"=>1,
                    "message"=>"Login is successful",
                    "info"=>[
//                        "id"=>$user->id,
//                        "name"=>$user->name,
//                        "number"=>$user->number,
//                        "package_type_id"=>$packageTypeId
                    ]
                ]);
            }
        }

        return response(["success"=>0,"message"=>"Credential doesn't match with out current information"]);
    }

    public function resetEmail(Request $request)
    {
        $email = $request->get('email');
        $user = User::query()->where('email',$email)->exists();
        if($user){
            $this->sendResetLinkEmail($request);
            $success = 1;
            $msg = 'Password sent to email';
        }else{
            $msg = 'Email not found';
            $success = 0;
        }

        return response([
            'success' => $success,
            'msg' => $msg,
        ]);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    public function packages()
    {
        return response(PackageType::all()->pluck('name','id'));
    }

    public function get_user($id)
    {
        $user = User::query()->where('id',$id)->first();
 //       dd($user);
        $patient = Patient::query()->where('user_id',$user->id)->first(); //patient information
       $dob = $patient->dob;
    //    $dob = Carbon::parse($patient->dob);
      //  dd($patient);
     //   $age = intval($dob->diff(now())->format('%y'));

        $products = json_decode(Product::query()->where('from','<=',$dob)->where('to','>=',$dob)->get()); //Suggested Product


        $product_data =[];
        foreach ($products as $product){
            $unique = Wishlist::query()->where('product_id',$product->id)->where('user_id',$user->id)->first();
            $product->image = 'public/admin/product/upload/'.$product->image;
            if(!$unique){
                array_push($product_data,$product);
            }
        }


        $all_sales = Sale::query()->where('patient_id',$patient->id)->groupBy('product_id')->get();

        $vaccine_apply_info = [];
        foreach ($all_sales as $all_sale){
                array_push($vaccine_apply_info,['product_id'=>$all_sale->product->id,'name'=>$all_sale->product->name,'price'=>$all_sale->price,'apply_date'=>$all_sale->created_at->format('Y-m-d')]);
        }

//        return json_encode($vaccine_apply_info);


        $sales = Sale::query()->where('patient_id',$patient->id)->groupBy('product_id')->latest()->get();

//        return json_encode($sales);
        $data = [];
        foreach ($sales as $sale) {
            $latest_applied = Sale::query()->where('product_id',$sale->product_id)->latest()->first();
            $latest_date = $latest_applied->created_at;
            $latest_date = Carbon::parse($latest_date);
            $duration = DurationVaccine::query()->where('product_id',$latest_applied->product_id)->where('does_number',$latest_applied['does_no']+1)->first();
            if($duration!=null) {
                if ($duration->type == 'Year') {
                    $next_date = Carbon::parse($latest_date->addYear(intval($duration->does_duration)))->format('Y-m-d');
                } elseif ($duration->type == 'Month') {
                    $next_date = Carbon::parse($latest_date->addMonth(intval($duration->does_duration)))->format('Y-m-d');
                } elseif ($duration->type == 'Day') {
                    $next_date = Carbon::parse($latest_date->addDay(intval($duration->does_duration)))->format('Y-m-d');
                } else {
                    $next_date = Carbon::parse($latest_date)->format('Y-m-d');
                }
            }else{
                $next_date = "Course Completed!!!";
            }

            array_push($data, ['product_id'=>$sale->product->id,'name'=>$sale->product->name,'image'=>'public/admin/product/upload/'.$sale->product->image,'next_date' => $next_date]);
        }

        return ['patient_info'=>$patient,'suggested_product'=>$product_data,'next_vaccine_application_info'=>$data,'vaccine_apply_info'=>$vaccine_apply_info];
    }






    public function tawkto()
    {
        return view('frontEnd.tawk');
    }

    public function add_to_wishlist($user_id,$product_id)
    {
//        dd($request->all());
        $data = [];
        $data['user_id'] = $user_id;
        $data['product_id'] = $product_id;

//        dd($data);
        Wishlist::create($data);
    }

    public function get_pin($id){
        return User::query()->findOrFail($id);
    }
}
