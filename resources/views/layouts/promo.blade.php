<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body>
<div id="app">

    @yield('content')
</div>
@if(\Illuminate\Support\Facades\Session::has('status'))
    <div class="alert alert-warning alert-dismissible bg-warning fade text-white font-weight-bold show" role="alert" style="position:fixed; top: 5%; right: 1%; z-index: 9999;">
        {{ \Illuminate\Support\Facades\Session::get('status')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@stack('scripts')

</body>
</html>
