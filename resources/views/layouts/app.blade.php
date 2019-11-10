<!DOCTYPE html>
<html prefix="og: //ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Texmart.kg это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики. Ведение бизнеса в формате В2В.Услуга логистики и доставки.Оформление документов экспортно ипортных документов.">
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="//www.imdb.com/title/tt0117500/" />
    <meta property="og:image" content="//ia.media-imdb.com/images/rock.jpg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favi.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('img/favi.png') }}"/>
    <title>@yield('title')</title>
    <meta name="keywords" content="texmart.kg, texmart, тексмарт, текстиль, ткани, производство в Кыргызстане, Бишкек, Кыргызстан, цеха, футболки, брюки, блузки, текстильное производство">
    <meta name="description" content="Texmart.kg это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики. Ведение бизнеса в формате В2В.">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55482520, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            trackHash:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55482520" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WN292N4');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148741731-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148741731-1');
    </script>
    <meta name="google-site-verification" content="gQhpGRoPuGE72Ov_f3SoLPgO5gYjVJPAb6JvcvpJJh8" />

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
    <link rel="stylesheet" href="{{ asset('css/jquerySteps/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquerySteps/mainJquerySteps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquerySteps/jquery.steps.css') }}">
    @stack('styles')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN292N4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
@includeWhen(auth()->check() && (auth()->user()->phone == null || auth()->user()->phone_verification != null), 'profile.modals.register_phone')
@if(\Illuminate\Support\Facades\Session::has('status'))
    <div class="alert alert-warning alert-dismissible bg-warning fade show" role="alert" style="position:fixed; top: 5%; right: 1%; z-index: 9999;">
        {{ \Illuminate\Support\Facades\Session::get('status')['message'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    {{--connect rateyo.js--}}
    <script src="{{ asset('js/jquery.rateyo.js') }}"></script>
    {{--connect chart.js with CDN--}}
    <script src="{{ asset('js/jquerySteps/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/jquerySteps/jquery.cookie-1.3.1.js') }}"></script>
    <script src="{{ asset('js/jquerySteps/jquery.steps.js') }}"></script>
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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

<script>
    $('.div-lazy').lazy();
</script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    @stack('scripts')
</body>
</html>
