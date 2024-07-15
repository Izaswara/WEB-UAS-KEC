<!-- resources/views/pengaduan/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pengaduan</h1>
    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $pengaduan->judul }}" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pengaduan->nama }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $pengaduan->email }}" required>
        </div>

        <div class="form-group">
            <label for="isi_pengaduan">Isi Pengaduan</label>
            <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control" required>{{ $pengaduan->isi_pengaduan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
