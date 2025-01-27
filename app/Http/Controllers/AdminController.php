<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
   
class AdminController extends Controller
{
    //


    public function show(){
        $setting = setting::first() ?? new setting();
        return view('home.home', compact('setting'));
            

    }
}
