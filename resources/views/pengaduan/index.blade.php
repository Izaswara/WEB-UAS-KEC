@extends('layouts.app')

@section('content')
    <h1>Daftar Pengaduan</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('pengaduan.create') }}" class="btn btn-primary mb-3">Buat Pengaduan Baru</a>
    <div class="table-responsive"> <!-- Tambahkan class table-responsive untuk memastikan tabel dapat di-scroll -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Isi Pengaduan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduans as $pengaduan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pengaduan->judul }}</td>
                        <td>{{ $pengaduan->nama }}</td>
                        <td>{{ $pengaduan->email }}</td>
                        <td>{{ $pengaduan->isi_pengaduan }}</td>
                        <td>
                            <a href="{{ route('pengaduan.show', $pengaduan->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('pengaduan.edit', $pengaduan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pengaduan.destroy', $pengaduan->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
