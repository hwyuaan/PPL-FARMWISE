<?php

// namespace App\Http\Controllers;


// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// class LoginController extends Controller
// {
//     public function index(){
//         return view('loginpage');
//     }
//     // public function postlogin(Request $request){
//     //     if(Auth::attempt($request-> only ('email','password'))){
//     //         return redirect('/home');
//     //     }
//     //     return redirect('/');
//     // }
// }


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function login(){
        return view('Login/loginpage');
             
    }
    // public function ajaxLogin(Request $request)
    // {
    //     try {
            
    //         $credentials = $request->only('email', 'password');
    //         // if databse
    //         return response()->json([
    //             'success' => true,
    //             'message' => $credentials["password"]
    //             // 'message' => 'Login successful!'
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'ppp',
    //             'error' => $e->getMessage()
    //         ]);
    //     }
    // }
    public function auth(Request $request)
    {
        $request->validate([
            'email' => ["Required","email"],
            'password' => ["Required"],
        ]);
      
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/profileadmin');
        }
        return back()->with('loginError', 'Login Gagal');


    }
}
