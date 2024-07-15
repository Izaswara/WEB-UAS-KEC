@extends('layouts.app')

@section('content')
    <h1>Kartu Keluarga</h1>
    <a href="{{ route('kk.create') }}">Buat Kartu Keluarga Baru</a>
    <ul>
        @foreach ($kartuKeluargas as $kartuKeluarga)
            <li>{{ $kartuKeluarga->nama_kepala_keluarga }} - {{ $kartuKeluarga->alamat }} - {{ $kartuKeluarga->jumlah_anggota }}</li>
            <a href="{{ route('kk.edit', $kartuKeluarga->id) }}">Edit</a>
            <form action="{{ route('kk.destroy', $kartuKeluarga->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        @endforeach
    </ul>
@endsection
