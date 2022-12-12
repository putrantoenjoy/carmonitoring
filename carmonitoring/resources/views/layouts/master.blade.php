<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.top')
<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="p-4" style="margin-left: 250px">
            @yield('content')
        </main>
    </div>
    @include('layouts.bottom')
</body>
</html>