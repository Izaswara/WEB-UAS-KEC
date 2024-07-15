<!-- resources/views/layouts/partials/navbar.blade.php -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" height="40" width="40" style="object-fit: cover; margin-right: 10px;">
            Purwakarta - Konoha
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeri.index') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('layanan.index') }}">Layanan</a>
                </li>
                <!-- Tambahkan menu lain di sini -->
            </ul>
        </div>
    </nav>
</header>
