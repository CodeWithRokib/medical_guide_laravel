<?php

namespace App\Http\Controllers;
use App\WebsiteContent;
use Illuminate\Http\Request;
use Auth;

class WebsiteContentController extends Controller
{
    public function website_data_modify(Request $request)
    {
        //dd($request->all());
               
            if(Auth::check() == false){
                $response["response"]=0;
                return json_encode($response);
            }
        $field_key     = $request->field_key;
        $field_value     = $request->field_value;
        $user_id        = Auth::user()->id;
        $content=WebsiteContent::where('field_key',$field_key)->first();
        $content->field_value=$field_value;
        $content->update();

        $response["response"]=1;
        return json_encode($response);
         //return $content;
        
       // return redirect()->back()->with('message','This product is already in your wish list');
    }
}
