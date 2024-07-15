<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduans'));
    }

    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'isi_pengaduan' => 'required',
        ]);

        Pengaduan::create($request->all());

        return redirect()->route('pengaduan.index')
                         ->with('success', 'Pengaduan berhasil disimpan.');
    }

    public function show(Pengaduan $pengaduan)
    {
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function edit(Pengaduan $pengaduan)
    {
        return view('pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'isi_pengaduan' => 'required',
        ]);

        $pengaduan->update($request->all());

        return redirect()->route('pengaduan.index')
                         ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')
                         ->with('success', 'Pengaduan berhasil dihapus.');
    }
}
