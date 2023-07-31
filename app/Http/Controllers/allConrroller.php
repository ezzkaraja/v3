<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allConrroller extends Controller
{
function index(){
    return view('personal.index');
}
function main(){
    return view('personal.main');
}
function checkout(){
    return view('personal.checkout');
}
function contact(){
    return view('personal.contact');
}




}
