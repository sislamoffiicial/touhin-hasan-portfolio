<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Touhin Hasan — Visual Artist')</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-mobile-menu />

    @yield('content')
</body>
</html>
