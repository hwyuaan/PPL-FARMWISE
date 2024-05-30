<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai(){
        $user = Auth::user();
        return view('pegawai.profilepegawai', compact('user'));
    }

   
}

