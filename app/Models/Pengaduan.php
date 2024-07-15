<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'nama',
        'email',
        'isi_pengaduan',
        // tambahkan atribut lain yang diperlukan
    ];
}
