<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Texmart.kg это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики. Ведение бизнеса в формате В2В.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favi.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('img/favi.png') }}"/>
    <title>Texmart.kg - онлайн платформа производителей цехов и текстилей в Кыргызстане</title>
    <meta name="keywords" content="texmart.kg, texmart, тексмарт, текстиль, ткани, производство в Кыргызстане, Бишкек, Кыргызстан, цеха, футболки, брюки, блузки, текстильное производство">
    <meta name="description" content="Texmart.kg это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики. Ведение бизнеса в формате В2В.">
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body class="bg-white">
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
                    <a href="https://mount.kg" target="_blank" class="text-muted small">Made with <span
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
