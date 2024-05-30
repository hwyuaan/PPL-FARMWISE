<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){
        try{
            $getAllPenyakit = Upload::all();
            return view('riwayat', compact('getAllPenyakit'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
        var_dump($getAllPenyakit);
    }

    public function riwayat(){
        try{
            $getAllPenyakit = Upload::all();
            $riwayat = [];
            foreach ($getAllPenyakit as $upload) {
                // Decode JSON prediction
                $prediction =json_decode($upload->prediction);
    
                // Menambahkan data ke array riwayat
                $riwayat[] = [
                    'Kategori' => ($prediction->kategorI),
                    'image_url' => $upload->path,
                ];
                
            }
            return view('riwayatadmin', compact('getAllPenyakit'));
           
         
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
