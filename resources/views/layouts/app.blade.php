<!DOCTYPE html>
<html prefix="og: //ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(env('APP_ENV') == 'production')
        @yield('seo_content')
    @endif
@yield('og_content')


<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favi.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('img/favi.png') }}"/>
    <title>@yield('title')</title>

    @if(env('APP_ENV') == 'production')
        <!-- Yandex.Metrika counter -->
            <script type="text/javascript" defer>
                document.addEventListener("DOMContentLoaded", function() {
                    (function (m, e, t, r, i, k, a) {
                        m[i] = m[i] || function () {
                            (m[i].a = m[i].a || []).push(arguments)
                        };
                        m[i].l = 1 * new Date();
                        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                    })
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                    ym(55482520, "init", {
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true,
                        trackHash: true
                    });
                });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/55482520" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
            <!-- Google Tag Manager -->
            <script defer>
                document.addEventListener("DOMContentLoaded", function() {
                    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-WN292N4');
                });
            </script>
            <!-- End Google Tag Manager -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148741731-1"></script>
            <script defer>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-148741731-1');
            </script>
            <meta name="google-site-verification" content="gQhpGRoPuGE72Ov_f3SoLPgO5gYjVJPAb6JvcvpJJh8" />

    @endif
{{--    @laravelPWA--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}?v={{ filemtime(public_path('css/main.min.css')) }}">
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}?v={{ filemtime(public_path('css/slick.min.css')) }}"/>
    <link rel="stylesheet" href="{{ asset('css/mmenu.min.css') }}?v={{ filemtime(public_path('css/mmenu.min.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}?v={{ filemtime(public_path('css/jquery.fancybox.min.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}?v={{ filemtime(public_path('css/owl.carousel.min.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.rateyo.min.css') }}?v={{ filemtime(public_path('css/jquery.rateyo.min.css')) }}">
    @stack('styles')
</head>
<body>
@if(env('APP_ENV') == 'production')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN292N4"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
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
            </div>
        </footer>
    </div>
@includeWhen(auth()->check() && (auth()->user()->phone == null || auth()->user()->phone_verification != null), 'profile.modals.register_phone')
@if(\Illuminate\Support\Facades\Session::has('status'))
    <div class="alert alert-warning alert-dismissible bg-warning fade text-white font-weight-bold show" role="alert" style="position:fixed; top: 5%; right: 1%; z-index: 9999;">
        {{ \Illuminate\Support\Facades\Session::get('status')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    <!-- jquery steps -->
    <script src="{{ asset('js/jquery.steps.js') }}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    <script src="{{ asset('js/mmenu.js') }}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    <script src="{{asset('js/slick.min.js')}}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    {{--connect rateyo.js--}}
    <script src="{{ asset('js/jquery.rateyo.js') }}?v={{ filemtime(public_path('css/main.min.css')) }}"></script>
    {{--connect chart.js with CDN--}}
<script>
    $(document).ready(() => {
        const mmenuFunction = function() {
            if ($('.mm-menu').hasClass('mm-menu_fullscreen')) {
                $('.mm-menu_fullscreen').css('max-width', $(window).width());
            } else {
                $('.mm-menu').css('max-width', '');
            }
            // $('.mm-menu_fullscreen').css('max-height', $(window).height());
        };

        mmenuFunction();
        window.addEventListener("resize", mmenuFunction);
        window.addEventListener("orientationchange", mmenuFunction);
    });

</script>
<script>
    if ('serviceWorker' in navigator) {

        navigator.serviceWorker.getRegistrations().then(function(registrations) {

            for(let registration of registrations) {

                registration.unregister()

            }}).catch(function(err) {

            console.log('Service Worker registration failed: ', err);

        });
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
        let active = false;

        const lazyLoad = function() {
            if (active === false) {
                active = true;

                setTimeout(function() {
                    lazyImages.forEach(function(lazyImage) {
                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                            lazyImage.src = lazyImage.dataset.src;
                            // lazyImage.srcset = lazyImage.dataset.srcset;
                            lazyImage.classList.remove("lazy");

                            lazyImages = lazyImages.filter(function(image) {
                                return image !== lazyImage;
                            });

                            if (lazyImages.length === 0) {
                                document.removeEventListener("scroll", lazyLoad);
                                window.removeEventListener("resize", lazyLoad);
                                window.removeEventListener("orientationchange", lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationchange", lazyLoad);
    });
</script>
<script>
    $('#callToProduction').on('show.bs.modal', e => {
        let btn = $(e.relatedTarget);
        let id = btn.data('id');

        $.ajax({
            url: '/api/production/' + id,
            success: data => {
                $('#title_production_modal').html(data.title);
                let html = '';
                if (data.phone1 || data.phone2 || data.email) {
                    html += '<h5 class="border-bottom">Контакты Обьявления</h5>'
                }
                if (data.phone1) {
                    html += '<p class="m-0 mb-1"><i class="fas fa-phone"></i>&nbsp;<a class="text-dark" href="tel:'+data.phone1+'">'+data.phone1+'</a></p>';
                }
                if (data.phone2) {
                    html += '<p class="m-0 mb-1"><i class="fas fa-phone"></i>&nbsp;<a class="text-dark" href="tel:'+data.phone2+'">'+data.phone2+'</a></p>';
                }
                if (data.email) {
                    html += '<p class="m-0 mb-1"><i class="fas fa-envelope"></i>&nbsp;<a class="text-dark" href="mailto:'+data.email+'">'+data.email+'</a></p>';
                }
                $('#mobile_phone_modal').html(html);
            },
            error: () => {
                console.log('error');
            }
        });
    });
</script>

<!-- cdnjs -->
<script type="text/javascript" src="{{ asset('js/jquery.lazy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.lazy.plugins.min.js') }}"></script>

<script>
    $('.div-lazy').lazy();
</script>

    <script src="{{ asset('js/chart.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
