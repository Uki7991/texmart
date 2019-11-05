<!DOCTYPE html>
<html prefix="og: //ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="//www.imdb.com/title/tt0117500/" />
    <meta property="og:image" content="//ia.media-imdb.com/images/rock.jpg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @laravelPWA
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.rateyo.css') }}">
    @stack('styles')
</head>
<body>
    <div id="app">
            @yield('content')
        <footer class="footer border-top border-dark border-danger">
            <div class="container pt-5 pb-2">
                @include('blocks.footer')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                        @include('partials.socialnetworks')
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                        <a rel="noopener" href="https://mount.kg" target="_blank" class="text-muted small">Made with <span
                                class="text-danger">&hearts;</span> by Mount</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    {{--connect rateyo.js--}}
    <script src="{{ asset('js/jquery.rateyo.js') }}"></script>
    {{--connect chart.js with CDN--}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    @stack('scripts')
</body>
</html>
