@extends('layouts.app')

@section('content')
    <h1>Kartu Shinobi</h1>
    <a href="{{ route('kartu-shinobi.create') }}">Buat Kartu Shinobi Baru</a>
    <ul>
        @foreach ($kartuShinobis as $kartuShinobi)
            <li>{{ $kartuShinobi->nama }} - {{ $kartuShinobi->jutsu }} - {{ $kartuShinobi->desa }}</li>
            <a href="{{ route('kartu-shinobi.edit', $kartuShinobi->id) }}">Edit</a>
            <form action="{{ route('kartu-shinobi.destroy', $kartuShinobi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        @endforeach
    </ul>
@endsection
