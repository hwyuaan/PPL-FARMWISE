<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\Models\File;
use App\Models\uploads;
use Illuminate\Support\Facades\Http;

class DeteksiController extends Controller
{
    public function upload(Request $request){
        return view("deteksi");
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
            $responseBody = json_decode($response->getBody()->getContents(), true);
        
            // Cek status kode response
            if ($response->getStatusCode() == 200) {
                //Session::put('imageUrl', $responseBody);
                $upload = new uploads();
                $upload->path = $imageUrl;
                $upload->prediction = $responseBody[0]; // Asumsi response body adalah [predicted_class, prediction_values]
                $upload->save();
                Session::put('imageUrl', $upload->path);
                // return redirect('/deteksi');
                return redirect()->route('deteksicrud', ['id' => $upload->id]);
            } else {
                // Mengarahkan kembali dengan pesan error jika status kode tidak 200
                return redirect('/deteksi')->with('error', 'Error processing image');
            }
        } catch (\Exception $e) {
            // Menangani exception dan mengarahkan kembali dengan pesan error
            return redirect('/deteksicrud')->with('error', 'Error: ' . $e->getMessage());
        }
    }


    public function showdeteksicrud($id)
    {
        $imageUrl = uploads::find($id);
        if (!$imageUrl) {
            return redirect('/deteksi')->with('error', 'Tidak ada gambar yang diupload');
        }
        return view('deteksicrud', compact('imageUrl'));
    }
    
}
