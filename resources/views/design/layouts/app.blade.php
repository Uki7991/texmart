<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}"/>

    @stack('styles')
</head>
<body style="overflow-x:hidden;">

    @yield('content')


<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>

    @stack('scripts')
</body>
</html>
