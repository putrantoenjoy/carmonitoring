<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.top')
@include('layouts.grafik')
<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="p-4" style="margin-left: 250px">
            @yield('content')
        </main>
    </div>
</body>
</html>