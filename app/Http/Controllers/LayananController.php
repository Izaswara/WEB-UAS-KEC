<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('layanan.index');
    }

    public function kartuShinobiIndex()
    {
        return view('layanan.kartu_shinobi.index');
    }

    public function kartuShinobiCreate()
    {
        return view('layanan.kartu_shinobi.create');
    }

    public function kartuShinobiStore(Request $request)
    {
        // Logic untuk menyimpan kartu shinobi
    }

    public function kkIndex()
    {
        return view('layanan.kk.index');
    }

    public function kkCreate()
    {
        return view('layanan.kk.create');
    }

    public function kkStore(Request $request)
    {
        // Logic untuk menyimpan kartu keluarga
    }
}
