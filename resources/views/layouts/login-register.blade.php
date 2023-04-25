<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">
</head>
<body>
    @yield('contenido')

    {{-- SCRIPTS --}}
    <script type="text/javascript" src="{{ asset('assets/js/login-register.js')}} "></script>
</body>
</html>