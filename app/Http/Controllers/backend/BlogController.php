<?php

namespace App\Http\Controllers\backend;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $blogs = Blog::all();
        return view('admin.blog.add-blog',compact('blogs'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
        ]);
        Blog::create($request->all());
        session()->flash('success',"Corporate Client Successfully stored");
        return redirect()->route('blog.add');
    }

    public function show($id){
        $blog = Blog::query()->findOrFail($id);
        $blogs = Blog::all();
        return view('admin.blog.edit-blog',compact('blogs','blog'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
        ]);
        Blog::query()->findOrFail($id)->update($request->all());
        session()->flash('success',"Corporate Client Successfully stored");
        return redirect()->route('blog.add');
    }

    public function destroy(Request $request){
        Blog::query()->findOrFail($request->id)->delete();
    }

}
