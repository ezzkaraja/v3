<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopConrroller extends Controller
{

function details(){
    return view('personal.shop-details');
}
function grid(){
    return view('shop-grid');
}
function cart(){
    return view('personal.shoping-cart');
}

}
