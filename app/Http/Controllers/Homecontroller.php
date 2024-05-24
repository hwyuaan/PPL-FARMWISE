<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function login(){
        return view('Login/loginpage');
    }
   
}
