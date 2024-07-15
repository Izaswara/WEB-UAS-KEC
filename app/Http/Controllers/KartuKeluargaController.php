<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kartuKeluargas = KartuKeluarga::all();
        return view('layanan.kk.index', compact('kartuKeluargas'));
    }

    public function create()
    {
        return view('layanan.kk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kepala_keluarga' => 'required',
            'alamat' => 'required',
            'jumlah_anggota' => 'required',
        ]);

        KartuKeluarga::create($request->all());

        return redirect()->route('layanan.kk.index');
    }

    public function edit($id)
    {
        $kartuKeluarga = KartuKeluarga::findOrFail($id);
        return view('layanan.kk.edit', compact('kartuKeluarga'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kepala_keluarga' => 'required',
            'alamat' => 'required',
            'jumlah_anggota' => 'required',
        ]);

        $kartuKeluarga = KartuKeluarga::findOrFail($id);
        $kartuKeluarga->update($request->all());

        return redirect()->route('layanan.kk.index');
    }

    public function destroy($id)
    {
        $kartuKeluarga = KartuKeluarga::findOrFail($id);
        $kartuKeluarga->delete();

        return redirect()->route('layanan.kk.index');
    }
}
