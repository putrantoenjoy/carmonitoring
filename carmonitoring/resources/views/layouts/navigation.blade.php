{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        }

        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        color: #818181;
        display: block;
        }

        .sidenav a:hover {
        color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="sidenav p-3">
            <div class="d-flex justify-content-center m-3">
                <a href="#about" class="h2 fw-bold text-white text-center">MonitoringApp</a>
            </div>
            <a href="{{route('kendaraan.index')}}" class="h5">Data Kendaraan</a>
            <a href="{{route('pemesanan.index')}}" class="h5">Pemesanan</a>
            <a href="#riwayat" class="h5">Riwayat</a>
            <a class="h5" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Keluar') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    </div>
</body>
</html> --}}

<nav class="sidenav p-3">
    <div class="d-flex justify-content-center m-3">
        <a href="{{route('home')}}" class="h2 fw-bold text-white text-center">MonitoringApp</a>
    </div>
    @role('admin')
    <a href="{{route('kendaraan.index')}}" class="h5">Data Kendaraan</a>
    @endrole
    <a href="{{route('pemesanan.index')}}" class="h5">Pemesanan</a>
    @role('admin')
    <a href="#riwayat" class="h5">Log</a>
    @endrole
    <a class="h5" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Keluar') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>