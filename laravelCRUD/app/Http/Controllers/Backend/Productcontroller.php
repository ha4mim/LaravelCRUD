<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function home(){
        return view("frontend.welcome");
    }
    public function addproduct(){
        return view("frontend.addproduct");
    }
}
