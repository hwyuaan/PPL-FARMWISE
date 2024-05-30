<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDeteksi extends Model
{
    use HasFactory;
    protected $table = 'riwayat_deteksi';

    protected $fillable = [
        'upload_id',
        'prediction',
        'image_url',
    ];
}
