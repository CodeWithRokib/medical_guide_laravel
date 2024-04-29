<?php

namespace App\Http\Controllers\backend;
use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller{

    public function store(Request $request)
    {
        Wishlist::create(['user_id'=>Auth::user()->id,'product_id'=>$request->product_id]);
    }

//    public function wishview(){
//        return view('admin.wish.wishlist');
//    }

//    public function destroy(Request $request){
//        $delete = Wishlist::find($request->id);
//        $delete->delete();
//    }

    public function clear_wishlist()
    {
        dd('hello');
//        $wishlists = Wishlist::all();
//        $wishlists->truncate();

        return redirect()->route('wish.view');
    }
}
