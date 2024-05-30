<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Prediction;
use App\Models\Upload;
use App\Models\RiwayatDeteksi;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    // public function tamp($id){
    //     return view('hasildeteksi');
    // }
    public function hasil()
    {
        return view('hasildeteksi');
    }

    public function showprediksi($id)
    {
        
        $upload = Upload::find($id);
      
        if (!$upload) {
            return redirect('/deteksi')->with('error', 'Data deteksi tidak ditemukan.');
        }
        
        $imageUrl = $upload->path;
        $prediction = json_decode($upload->prediction);
        var_dump($prediction);
        
        // Kirim data ke view
        return view('hasildeteksi', compact('prediction', 'imageUrl'));

        
    }

    public function riwayat()
    {
        $upload = Upload::all();
        $riwayat = [];

        foreach ($upload as $upload) {
            // Dekode JSON
            $prediction = json_decode($upload->prediction);
    
            // Simpan riwayat deteksi
            RiwayatDeteksi::create([
                'prediction' => $upload->prediction,
                'image_url' => $upload->path,
            ]);
    
            // Tambahkan data riwayat ke dalam array
            $riwayat[] = [
                'prediction' => $prediction,
                'image_url' => $upload->path,
            ];
        }

        return view('riwayat', compact('riwayat'));
    }
       
    

    
}
