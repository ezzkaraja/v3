<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogConrroller extends Controller
{

function blog(){
    return view('personal.blog');
}
function details(){
    return view('personal.blog-details');
}

}
