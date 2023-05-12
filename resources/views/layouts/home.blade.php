<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Definiton-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A demo web project for IV Interactive Review">
        <meta name="keywords" content="web design, demo web project, professional web design">
        <meta name="author" content="Ashime Amandong">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- title -->
        <title>@yield('title')</title>

    </head>
    <body>
        @include('includes.header')
        <main>

            @yield('content')
            
        </main>
        @include('includes.footer')
    </body>
</html>

<!-- Custom global scripts -->
<script src="/js/lazyload.js"></script>

<!-- Custom individual scripts -->
@yield('special-scripts')

