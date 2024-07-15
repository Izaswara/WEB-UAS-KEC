@extends('layouts.app')

@section('content')
    <h1>Buat Kartu Keluarga Baru</h1>
    <form action="{{ route('kk.store') }}" method="POST">
        @csrf
        <label for="nama_kepala_keluarga">Nama Kepala Keluarga:</label>
        <input type="text" id="nama_kepala_keluarga" name="nama_kepala_keluarga" required>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
        <label for="jumlah_anggota">Jumlah Anggota:</label>
        <input type="text" id="jumlah_anggota" name="jumlah_anggota" required>
        <button type="submit">Buat</button>
    </form>
@endsection
