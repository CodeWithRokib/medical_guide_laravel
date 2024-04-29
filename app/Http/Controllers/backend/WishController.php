<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wishlist;

class WishController extends Controller
{
    public function clear_wishlist()
    {
        //dd('hello');
        Wishlist::truncate();


        return redirect()->route('wish.view');
    }

    public function destroy($id){
        $delete = Wishlist::find($id);
        $delete->delete();
        return redirect()->route('wish.view');
    }

}
