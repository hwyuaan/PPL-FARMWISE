<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function profileadmin(){
        $user = Auth::user();
        return view('admin.profileadmin', compact('user'));
    }

    public function editProfileadmin(Request $request, $id)
    {
        $user = User::findOrFail($id);   
        return view('admin.ubahadmin', compact('user'));
    }

    public function updateProfile(Request $request, $id){

        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tempatlahir' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|max:255',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'tanggal' => $request->input('tanggal'),
            'tempatlahir' => $request->input('tempatlahir'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
       
        if ($user->save()) {
            session()->flash('success', 'Profile updated successfully.');
        } else {
            session()->flash('error', 'Failed to update profile.');
        }

        return redirect()->route('profileadmin');
        $saved = $user->save();
        if ($saved) {
            session()->flash('success', 'Profile updated successfully.');
        } else {
            session()->flash('error', 'Failed to update profile.');
        }
        return redirect()->route('profileadmin');
    }

    
    public function showalldataadmin(){
        $users = User::where('role', 'admin')->get();
        return view('admin.dataadmin', compact('users'));
    }
    public function create(Request $request){
        return view('admin.formtambahadmin');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal' => 'required',
            'tempatlahir' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'role' => 'required|string|max:255',
        ]);
        
    
        $user = new User([
            'name' => $request->input('name'),
            'tanggal' => Carbon::createFromDate($request->input('tanggal')),
            'tempatlahir' => $request->input('tempatlahir'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password), 
            'role' => $request->input('role'),
        ]);
    
        if ($user->save()) {
            session()->flash('success', 'Admin added successfully.');
        } else {
            session()->flash('error', 'Failed to add admin.');
        }
    
        return redirect()->route('showalldataadmin');
    }

    // PEGAWAIIIII

    public function showallpegawai(){
        $users = User::where('role', 'pegawai')->get();
        return view('admin.datapegawai', compact('users'));
    }
       
    public function createpegawai(){
        return view ('admin.formtambahpegawai');
    }
    public function storepegawai(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tempatlahir' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'role' => 'required|string|max:255',
        ]);
    
        $user = new User([
            $user = Auth::user(),
            'name' => $request->input('name'),
            'tanggal' => $request->input('tanggal'),
            'tempatlahir' => $request->input('tempatlahir'),
            'email' => $request->input('email'),
            'password' =>$request->input('password'), 
            'role' => $request->input('role'),
        ]);
    
        if ($user->save()) {
            session()->flash('success', 'Data Pegawai berhasil di update.');
        } else {
            session()->flash('error', 'Gagal mengupdate Pegawai.');
        }
    
        return redirect()->route('/datapegawai');
    }    

    public function editPegawai(Request $request, $id)
    {
        $user =User::findOrFail($id);   
        return view('admin.ubahdatapegawai', compact('user'));
    }

    public function updatePegawai(Request $request, $id){

        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tempatlahir' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|max:255',
        ]);
        
        $password = $request->input('password') ? bcrypt($request->input('password')) : $user->password;
    
        $user->update([
            'name' => $request->input('name'),
            'tanggal' => $request->input('tanggal'),
            'tempatlahir' => $request->input('tempatlahir'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);;
       
        if ($user->save()) {
            session()->flash('success', 'Profile updated successfully.');
        } else {
            session()->flash('error', 'Failed to update profile.');
        }

        return redirect()->route('pegawai');
        
    }


    public function hapusPegawai($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        if ($pegawai->delete()) {
            session()->flash('success', 'Pegawai deleted successfully.');
        } else {
            session()->flash('error', 'Failed to delete pegawai.');
        }

        return redirect()->route('datapegawai');
    }
   
    

    
}
