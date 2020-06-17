<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"></link>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=""></link>
</head>
<body>
    @include('layout.menu')
    @yield('content')
    @include('layout.footer')
    
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>