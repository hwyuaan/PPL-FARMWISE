<?php

use App\Http\Controllers\Homecontroller;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeteksiController;
use App\Http\Controllers\HasilController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Matching\HostValidator;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\files;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {return view('Login/homepage');});

Route::get('/deteksi',[DeteksiController::class, "upload"]) -> name(name:"upload");
Route::post('/deteksi',[DeteksiController::class,'uploadPOST']) -> name(name:"uploadPOST");
Route::get('/deteksicrud/{id}',[DeteksiController::class,'showdeteksicrud']) -> name(name:"deteksicrud");



//Route::get('/login',[Homecontroller::class,'login']) -> name(name:"login");
Route::get('/loginpage',[LoginController::class,'login'])->name('login');
Route::post('/admin/profiladmin', [LoginController::class, 'auth'])->name('auth');

Route::get('/hasil', [HasilController::class,'hasil'])->name('hasil');
