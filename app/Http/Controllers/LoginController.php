<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;;
use Illuminate\Support\Facades\Log;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function login(){
        return view('Login/loginpage');
             
    }
    
    public function cek (Request $request){
        $request-> validate([
            'email' => 'required',
            'password' => 'required',
        ]);
            
        
        $credentials = $request->only('email', 'password');
        //dd($credentials);
        // $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::where('email', $request->email)->first();
            $username = $user->name;
            session(['username' => $username]); 
            if ($user->role == 'admin') {
                return redirect()->intended('/admin');
            } 
            elseif ($user->role == 'pegawai') {
                return redirect()->intended('/pegawai');} 
            else {
                // Redirect ke halaman default atau logout
                return redirect()->intended('/');
            }
        } 
        else {
            return back()->withErrors(['loginError' => 'Login Gagal'])->withInput();
           
        }

        
        
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
}
