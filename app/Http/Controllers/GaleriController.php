<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Simpan nama file gambar dan deskripsinya dalam array
        $images = [
            ['file' => 'sosialisasi1.jpg', 'description' => 'Kegiatan sosialisasi perdamaian di Desa Purwakarta.'],
            ['file' => 'sosialisasi2.jpg', 'description' => 'Warga desa berkumpul dalam rangka memperingati hari perdamaian.'],
            ['file' => 'sosialisasi3.jpg', 'description' => 'Anak-anak desa turut serta dalam kegiatan perdamaian.'],
            ['file' => 'sosialisasi4.jpg', 'description' => 'Penerimaan kritik dari seseorang warga desa kecamatan Purwakarta(Konoha).'],
            ['file' => 'sosialisasi5.jpg', 'description' => 'Rapat Antar kepala-kepala desa antar kecamatan.'],
            ['file' => 'sosialisasi6.jpg', 'description' => 'Bersosialisasi untuk menemukan solusi solusi untuk masalah yang ada.'],
            // Tambahkan gambar dan deskripsi lainnya di sini
        ];

        return view('galeri.index', ['images' => $images]);
    }

    public function show($id)
    {
        // Logic to show individual image
    }
}
