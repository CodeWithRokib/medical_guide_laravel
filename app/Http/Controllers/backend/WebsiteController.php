<?php

namespace App\Http\Controllers\backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Contact;

class WebsiteController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        return view('admin.website.service',compact('services'));
    }

    public function servicestore(Request $request){

        $this->validate($request,[
            'name'=>'required|unique:services',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);

        $image = $request->file('image');
        $image_name = substr(md5(time()),0,6);
        $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();

        $image->move(base_path('public/admin/product/upload/'),$filename);
        $data = $request->except('image');
        $data['image'] = $filename;
        Service::create($data);
        session()->flash('success','Service has store successfully complete');
        return redirect()->route('website.service');
    }

    /* Service Edit Start */
    public function serviceedit($id){
        $service = Service::find($id);
        return view('admin.website.edit-service',compact('service'));
    }

    /* Service Edit End*/

    /* service Delete */

    public function serviceDelete(Request $request){
        $delete = Service::find($request->id);
        /* unlink */
        $path = "public/admin/product/upload/".$delete->image;
        unlink($path);
        /* Unlink */
        $delete->delete();
    }


    public function ServiceUpdate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif',
        ]);
        $update = Service::find($request->id);
        
        if($request->has('image')){
            
            /* unlink old Files start */
            
            $path = 'public/admin/product/upload/'.$update->image;
            unlink($path);
            
            /* unlink old Files End */

            $image = $request->file('image');
            $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data = $request->except('image');
            $data['image']= $filename;
            $update->update($data);
            
        }else{
            $update->update($request->except('image'));
        }
        session()->flash('success','Service has update successfully complete');
        return redirect()->route('website.service');
    }



    /* About Us Start */

    public function aboutus (){
        $abouts = About::all();
        return view('admin.website.aboutus',compact('abouts'));
    }

    public function aboutusStore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);

        $image = $request->file('image');
        $image_name = substr(md5(time()),0,6);
        $filename = Date('Y').'_'.$image_name.".".$image->getClientOriginalExtension();

        $image->move(base_path('public/admin/product/upload/'),$filename);
        $data = $request->except('image');
        $data['image'] = $filename;
        About::create($data);
        session()->flash('success','About us has store successfully complete');
        return redirect()->route('website.aboutus');
    }

    /* Service Edit Start */
    public function aboutedit($id){
        $about = About::find($id);
        return view('admin.website.edit-aboutus',compact('about'));
    }

    /* Service Edit End*/

    /* service Delete */

    public function aboutDelete(Request $request){
        $delete = Service::find($request->id);
        /* unlink */
        $path = "public/admin/product/upload/".$delete->image;
        if (file_exists($path)) {
            unlink($path);
        }
        /* Unlink */
        $delete->delete();
    }


    public function aboutUpdate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif',
        ]);
        $update = About::find($request->id);
        if($request->has('image')){
            /* unlink old Files start */
            $path = 'public/admin/product/upload/'.$update->image;
            if (file_exists($path)) {
                unlink($path);
            }

            $image = $request->file('image');
            $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data = $request->except('image');
            $data['image']= $filename;
            $update->update($data);
        }else{
            $update->update($request->except('image'));
        }
        session()->flash('success','About Us has update successfully complete');
        return redirect()->route('website.aboutus');
    }

    /* About Us End */


    /* Contact Us Start */
    public function contactus(){
        $contactus = Contact::all();
        return view('admin.website.contact',compact('contactus'));
    }

    public function contactusStore(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:contacts',
            'phone1'=>'unique:contacts',
            'phone2'=>'unique:contacts',
            'helpline'=>'unique:contacts',
        ]);

        Contact::create($request->all());
        session()->flash('success','Contact Us has store successfully complete');
        return redirect()->route('website.contactus');

    }


    public function contactusDelete(Request $request){
        $delete= Contact::find($request->id);
        $delete->delete();
    }

    public function contactusedit($id){
        $contact = Contact::find($id);
        return view('admin.website.edit-contact',compact('contact'));
    }

    public function contactusUpdate(Request $request)
    {

        $contact = Contact::find($request->id);
        $contact->update($request->all());
        session()->flash('success','Contact Us has update successfully complete');
        return redirect()->route('website.contactus');
    }





    /* Contact Us End */
}
