@extends('layouts.app')

@section('content')
    <h1>Edit Kartu Shinobi</h1>
    <form action="{{ route('kartu-shinobi.update', $kartuShinobi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $kartuShinobi->nama }}" required>
        <label for="jutsu">Jutsu:</label>
        <input type="text" id="jutsu" name="jutsu" value="{{ $kartuShinobi->jutsu }}" required>
        <label for="desa">Desa:</label>
        <input type="text" id="desa" name="desa" value="{{ $kartuShinobi->desa }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
