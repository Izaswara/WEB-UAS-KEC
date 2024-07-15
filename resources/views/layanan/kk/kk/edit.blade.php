@extends('layouts.app')

@section('content')
    <h1>Edit Kartu Keluarga</h1>
    <form action="{{ route('kk.update', $kartuKeluarga->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_kepala_keluarga">Nama Kepala Keluarga:</label>
        <input type="text" id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="{{ $kartuKeluarga->nama_kepala_keluarga }}" required>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ $kartuKeluarga->alamat }}" required>
        <label for="jumlah_anggota">Jumlah Anggota:</label>
        <input type="text" id="jumlah_anggota" name="jumlah_anggota" value="{{ $kartuKeluarga->jumlah_anggota }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
