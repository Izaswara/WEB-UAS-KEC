<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kepala_keluarga', 'alamat', 'jumlah_anggota'];
}
