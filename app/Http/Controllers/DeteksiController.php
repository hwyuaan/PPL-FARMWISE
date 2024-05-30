<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Log;
use App\Models\File;
use App\Models\Upload;
use Illuminate\Support\Facades\Http;
use Exception;

class DeteksiController extends Controller
{
    public function upload(Request $request){
        return view('deteksi');
        
    }

    public function uploadPOST(Request $request)
    {
        // Validasi gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mendapatkan file gambar
        $image = $request->file('image');
        $client = new Client(['base_uri' => 'http://127.0.0.1:3000']); 

        try {
            $hashedName = md5_file($image->getRealPath()) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('uploads', $hashedName, 'public',$request->file('image')->getClientOriginalName());
            $imageUrl = Storage::url($imagePath);

            // Mengirim request POST ke Flask API
            $response = $client->post('/deteksi', [
                'multipart' => [
                    [
                        'name'     => 'image',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName(),
                        'headers'  => [
                            'Content-Type' => $image->getClientMimeType()
                            ]
                            ]
                            ]
                            
            ]);

            // Mendekode response body
            // var_dump($response->getBody()->getContents());
            $responseBody = json_decode($response->getBody()->getContents());
            
            // Cek status kode response
            $upload = new Upload();
            $upload->path = $imageUrl;
            $upload->prediction = json_encode($responseBody);
            $upload->save();
            return redirect()->route('deteksicrud', ['id' => $upload->id]);
            
        } catch (\Exception) {
            return redirect()->back()->with('error', 'Upload Gambar Gagal! Coba Ulangi.');
        }
    }


    public function showdeteksicrud($id)
    {
        $upload = Upload::find($id);
        
        if (!$upload) {
            return redirect('/deteksi')->with('error', 'Tidak ada gambar yang diupload');
        }
        
        $imageUrl = $upload->path;
        
        return view('deteksicrud', compact('imageUrl','id'));
    }

    public function processHasilDeteksi($id){
        return redirect()->route('hasil-deteksi', ['id' => $id]);

    }

    public function hasilDeteksi($id)
    {
        $upload = Upload::find($id);
        
        if (!$upload) {
            return redirect('/deteksi')->with('error', 'Tidak ada gambar yang diupload');
        }
        
        $imageUrl = $upload->path;
        $prediction = json_decode($upload->prediction);
        $kategori = $prediction->kategori;
        $akurasi_x = $prediction->prediction_score[0];
        $akurasi_y = $prediction->prediction_score[1];

        return view('hasildeteksi', compact('imageUrl', 'prediction','id'));    
    }

}