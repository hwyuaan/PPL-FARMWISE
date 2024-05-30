<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Homecontroller;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeteksiController;
use App\Http\Controllers\HasilController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Matching\HostValidator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\files;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RiwayatController;
use App\Models\RiwayatDeteksi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// index
Route::get('/', function () {return view('Login.homepage');})->name('homepage');

Route::post('/logout', function () {Auth::logout();return redirect('/');})->name('logout');

// DeteksiController
Route::get('/deteksi',[DeteksiController::class, "upload"]) -> name(name:"upload");
Route::post('/deteksi',[DeteksiController::class,'uploadPOST']) -> name(name:"uploadPOST");
Route::get('/deteksicrud/{id}', [DeteksiController::class, 'showdeteksicrud'])->name('deteksicrud');
Route::get('/hasil-deteksi/{id}', [DeteksiController::class, 'hasilDeteksi'])->name('hasil-deteksi');
Route::post('/hasil-deteksi/{id}', [DeteksiController::class, 'processHasilDeteksi'])->name('process-hasil-deteksi');
Route::get('/riwayatdeteksi', [RiwayatController::class, 'index'])->name('index');
Route::post('/riwayatdeteksi', [RiwayatController::class, 'index'])->name('index');
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');
Route::post('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');




// LoginController
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginpage', [LoginController::class, 'cek'])->name('cek');

 

// AdminController

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin', [AdminController::class, "profileadmin"])->name('profileadmin');
    Route::get('/riwayatdeteksi', [RiwayatController::class, 'index'])->name('riwayatdeteksi');

});

Route::middleware(['auth','role:pegawai'])->group(function(){
    Route::get('/datapegawai', [AdminController::class, "profilepegawai"])->name('profilepegawai');
    Route::get('/riwayatdeteksi', [RiwayatController::class, 'index'])->name('riwayatdeteksi');

});

// // PegawaiController
Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'profileadmin'])->name('profileadmin');
    Route::get('/pegawai', [PegawaiController::class, 'pegawai'])->name('pegawai');
});

Route::get('/formubahadmin/{id}', [AdminController::class, 'editProfileadmin'])->name('editprofileadmin');
Route::put('/ubahadmin/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile');
Route::get('/dataadmin', [AdminController::class, 'showalldataadmin'])->name('showalldataadmin');
Route::post('/dataadmin', [AdminController::class, 'store'])->name('store');
Route::get('/tambahdataadmin', [AdminController::class, 'create'])->name('create');
Route::post('/tambahdataadmin',[AdminController::class, 'store'])->name('store');
Route::get('/datapegawai', [AdminController::class, 'showallpegawai'])->name('showallpegawai');
Route::get('/tambahpegawai', [AdminController::class, 'createpegawai'])->name('createpegawai');
Route::post('/tambahpegawai',[AdminController::class, 'storepegawai'])->name('storepegawai');
Route::get('/formubahpegawai/{id}', [AdminController::class, 'editPegawai'])->name('editpegawai');
Route::put('/ubahpegawai/{id}', [AdminController::class, 'updatePegawai'])->name('updatePegawai');
Route::put('/hapuspegawai/{id}', [AdminController::class, 'hapusPegawai'])->name('hapusPegawai');



// HasilController

