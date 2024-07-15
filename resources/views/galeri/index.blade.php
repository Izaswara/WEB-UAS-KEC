@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Galeri Sosialisasi Perdamaian Desa Purwakarta</h1>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('images/galeri/' . $image['file']) }}" class="card-img-top" alt="Sosialisasi">
                            <div class="card-body">
                                <p class="card-text">{{ $image['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
