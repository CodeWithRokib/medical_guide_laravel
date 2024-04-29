<?php

namespace App\Http\Controllers\backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        return view('admin.banners.add-banner',compact('banners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner_page_no'=>'required',
        ]);
        $save = $request->except('banner_img');
        if($request->hasFile('banner_img')){
            $image = $request->file('banner_img');
            $random_time = md5(time());
            $fileformat = $image->getClientOriginalExtension();
            $randome_name =substr($random_time,5,12);
            $filename =$randome_name.".".$fileformat;
            $image->move(base_path("public/admin/product/upload/"),$filename);
            $save["banner_img"]=$filename;
        }
        Banner::create($save);
        session()->flash('message', 'Banner has been Added!');
        return redirect()->route('banner.add');
    }

    public function edit($id)
    {
        $edit = Banner::find($id);
        $banners = Banner::all();
        return view('admin.banners.edit-banner',compact('edit','banners'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'banner_page_no'=>'required',
        ]);
        $save = $request->except('banner_img');
        $update = Banner::find($id);
        if($request->hasFile('banner_img')){

            $path = "public/admin/product/upload/".$update->banner_img;
            @unlink($path);

            $image = $request->file('banner_img');
            $random_time = md5(time());
            $fileformat = $image->getClientOriginalExtension();
            $randome_name =substr($random_time,5,12);
            $filename =$randome_name.".".$fileformat;
            $image->move(base_path("public/admin/product/upload/"),$filename);
            $save["banner_img"]=$filename;
        }
        Banner::findOrFail($id)->update($save);
        return redirect()->route('banner.add')->with('message', 'Banner has been updated!');
    }


    public function destroy($id)
    {
        $delete = Banner::find($id);
        if ($delete->banner_img!=null){
            $path = "public/admin/product/upload/".$delete->banner_img;
            @unlink($path);
        }
        $delete->delete();
        return redirect()->route('banner.add');
    }
}
