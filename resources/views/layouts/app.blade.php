<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Link to Bootstrap CSS and custom styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Ubah sesuai dengan nama file CSS Anda -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <style>
        .navbar-nav .nav-link {
            color: white !important;
        }
        .header-image {
            width: 100%;
            height: 50vh; /* Atur tinggi menjadi 50vh */
            background: url('{{ asset('images/kantor-kecamatan.jpeg') }}') no-repeat center center;
            background-size: cover;
            position: relative;
            z-index: 1;
        }
        .header-image.shrink {
            height: 30vh; /* Contoh tinggi ketika di-scroll */
        }
        .content-wrapper {
            padding-top: 2rem;
        }
        body {
            background-color: black; /* Set background color to black */
            color: white; /* Set text color to white for contrast */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        @include('layouts.partials.navbar')

        <div class="header-image" id="headerImage"></div>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        @include('layouts.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> <!-- Ubah sesuai dengan nama file JS Anda -->
    <script>
        window.addEventListener('scroll', function() {
            var headerImage = document.getElementById('headerImage');
            if (window.scrollY > 50) {
                headerImage.classList.add('shrink');
            } else {
                headerImage.classList.remove('shrink');
            }
        });
    </script>
</body>
</html>
