<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('web.layout.head')
</head>
<body>
<header>
    @include('web.layout.header')
</header>
<main>
    @yield('main')
</main>
<footer>
    @include('web.layout.footer')
</footer>
</body>
</html>
