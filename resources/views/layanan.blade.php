<!-- resources/views/layanan.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Informasi Layanan</h1>
        <p>Deskripsi layanan dan informasi penting lainnya.</p>

        <h2>Pilihan Layanan:</h2>
        <ul>
            <li><a href="{{ route('layanan.kartu_shinobi') }}">Pembuatan Kartu Shinobi</a></li>
            <li><a href="{{ route('layanan.kk') }}">Pembuatan Kartu Keluarga (KK)</a></li>
            <li>Motto Pelayanan: {{ $mottoPelayanan }}</li>
        </ul>
    </div>
@endsection
