<?php

namespace App\Http\Controllers\backend;

use App\Models\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class HomepageController extends Controller
{
    public function index(){
        $homepage = Homepage::all();
        return view('admin.website.homepage-dynamic',compact('homepage'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required|mimes:jpeg,png,gif',
            'video'=>'required',
        ]);

        $image = $request->file('image');
        $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
        $image->move(base_path('public/admin/product/upload/'),$filename);
        $data = $request->except('image');
        $data['image'] = $filename;
        Homepage::create($data);
        session()->flash('success','Saved');
        return redirect()->route('homepage.add');
    }

    public function show($id)
    {
        $homepage = Homepage::findOrFail($id);
        //dd($homepage);
        return view('admin.website.homepage-edit',compact('homepage'));
    }

    public function update(Request $request,$id)
    {
       // dd($request->all());
        $this->validate($request,[
            'title'=>['required',Rule::unique('homepages')->ignore($id)],
            'image'=>'mimes:jpeg,png,gif',
            'video'=>'required',
        ]);
        $homepage_update = Homepage::findOrFail($id);
        $data = $request->except('image');

        if($request->hasFile('image')){
            /* old image unlink start */
            $path = "public/admin/product/upload/".$homepage_update->image;
            @unlink($path);
            /* old image unlink start */
            $image = $request->file('image');
            $filename = Date('Y')."_".substr(md5(time()),0,6).".".$image->getClientOriginalExtension();
            $image->move(base_path('public/admin/product/upload/'),$filename);
            $data['image'] = $filename;
        }
        $homepage_update->update($data);
        session()->flash('success','Saved');
        return redirect()->route('homepage.add');
    }

    public function destroy(Request $request)
    {
        $img_path = Homepage::findOrFail($request->id);
        /* Image Unlink Start */
        if($img_path->image !=null ){
            $path = 'public/admin/product/upload/'.$img_path->image;
            unlink($path);
        }
        /* Image Unlink End */

        $img_path->delete();
    }
}
