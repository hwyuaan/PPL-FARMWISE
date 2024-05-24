<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        // Lakukan request HTTP ke Flask API
        $response = Http::get('http://127.0.0.1:3000');

        // Ambil data hasil prediksi dari response
        $prediction = $response->json();
        dd($prediction);

        // Kirim data hasil prediksi ke view
        return view('hasildeteksi', ['prediction' => $prediction]);
    }
}
