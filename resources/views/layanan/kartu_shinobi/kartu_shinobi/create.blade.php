@extends('layouts.app')

@section('content')
    <h1>Buat Kartu Shinobi Baru</h1>
    <form action="{{ route('kartu-shinobi.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="jutsu">Jutsu:</label>
        <input type="text" id="jutsu" name="jutsu" required>
        <label for="desa">Desa:</label>
        <input type="text" id="desa" name="desa" required>
        <button type="submit">Buat</button>
    </form>
@endsection
