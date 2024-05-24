<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table = 'files'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'name', 'path'
    ];
}
