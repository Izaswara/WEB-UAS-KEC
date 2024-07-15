@extends('layouts.app')

@section('content')
    <h1>Detail Pengaduan</h1>
    <p><strong>Judul:</strong> {{ $pengaduan->judul }}</p>
    <p><strong>Isi:</strong> {{ $pengaduan->isi }}</p>
    <a href="{{ route('pengaduan.index') }}">Kembali ke daftar pengaduan</a>
@endsection
