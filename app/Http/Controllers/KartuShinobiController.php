<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuShinobi;

class KartuShinobiController extends Controller
{
    public function index()
    {
        $kartuShinobis = KartuShinobi::all();
        return view('layanan.kartu_shinobi.index', compact('kartuShinobis'));
    }

    public function create()
    {
        return view('layanan.kartu_shinobi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jutsu' => 'required',
            'desa' => 'required',
        ]);

        KartuShinobi::create($request->all());

        return redirect()->route('layanan.kartu_shinobi.index');
    }

    public function edit($id)
    {
        $kartuShinobi = KartuShinobi::findOrFail($id);
        return view('layanan.kartu_shinobi.edit', compact('kartuShinobi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jutsu' => 'required',
            'desa' => 'required',
        ]);

        $kartuShinobi = KartuShinobi::findOrFail($id);
        $kartuShinobi->update($request->all());

        return redirect()->route('layanan.kartu_shinobi.index');
    }

    public function destroy($id)
    {
        $kartuShinobi = KartuShinobi::findOrFail($id);
        $kartuShinobi->delete();

        return redirect()->route('layanan.kartu_shinobi.index');
    }
}
