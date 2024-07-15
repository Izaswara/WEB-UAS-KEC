@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="ubah">Selamat Datang di Website Kecamatan Purwakarta</h1>
            <p class="lead">Website resmi Kecamatan Purwakarta sebagai media informasi dan pelayanan publik.</p>
        </div>
    </div>
    <div class="row text-center mt-5">
        <div class="col-md-12">
            <img src="{{ asset('images/kepala-camat.jpg') }}" alt="Kepala Camat" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
            <h2 class="mt-3">Naruto</h2>
            <p class="lead">Kepala Camat Kecamatan Purwakarta</p>
            <p>"Dengan semangat kebersamaan dan kerja keras, kita wujudkan Kecamatan Purwakarta yang maju, mandiri, dan sejahtera. Mari kita bersama-sama bekerja untuk kesejahteraan masyarakat."</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <table class="table table-bordered table-primary">
                <thead>
                    <tr>
                        <th>Visi</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <ul>
                        <li>Mewujudkan Kecamatan Purwakarta yang Mandiri, Maju, dan Sejahtera melalui Pembangunan Berkelanjutan dan Pelayanan Publik yang Prima.</li>
                        <li>Mewujudkan Kecamatan Purwakarta yang menguasai Segala Elemen.</li>
                        <li>Mewujudkan Perdamaian Dunia dan Menghapus Kesenjangan Antar Clan.</li>
                    </ul>
                    </td>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered table-primary">
                <thead>
                    <tr>
                        <th>Misi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</li>
                                <li>Mendorong pertumbuhan ekonomi lokal yang berkelanjutan.</li>
                                <li>Mewujudkan pemerintahan yang bersih, transparan, dan akuntabel.</li>
                                <li>Meningkatkan infrastruktur dan layanan publik.</li>
                                <li>Melestarikan nilai-nilai budaya dan kearifan lokal.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
