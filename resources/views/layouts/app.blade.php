<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Texmart.kg это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики. Ведение бизнеса в формате В2В.Услуга логистики и доставки.Оформление документов экспортно ипортных документов.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favi.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('img/favi.png') }}"/>
    <title>Texmart.kg - онлайн платформа производства одежды в Киргизии.</title>
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body class="bg-white">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN292N4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="app">
    @yield('content')

    <footer class="footer border-top border-danger bg-white">
        <div class="container pt-5 pb-2">
            @include('partials.footer')
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

@stack('scripts')
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

</body>
</html>
