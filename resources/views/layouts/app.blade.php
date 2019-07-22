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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb6e8d4dc3.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body class="bg-white">
<div id="app">
    @yield('content')

    <footer class="footer border-top border-danger bg-white">
        <div class="container pt-5 pb-2">
            <div>
                @include('partials.footer')
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                @include('partials.socialnetworks')
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                <a href="https://mount.kg" target="_blank" class="text-muted small">Made with <span
                        class="text-danger">&hearts;</span> by Mount</a>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@stack('scripts')

</body>
</html>
