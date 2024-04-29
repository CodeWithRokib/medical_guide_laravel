<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OtherProductSaleController extends Controller
{
    public function index(){
//        dd('');
        return view('admin.patient.sell-other-product');
    }



}
