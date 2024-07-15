@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<h1>Layanan</h1>
<ul>
    <li><a href="{{ route('layanan.kartu_shinobi.index') }}">Pembuatan Kartu Shinobi</a></li>
    <li><a href="{{ route('layanan.kk.index') }}">Pembuatan Kartu Keluarga</a></li>
</ul>
@endsection
