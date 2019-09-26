@extends('layouts.app')

@section('content')

    @include('partials.promo')


    <h1 class="" style="display: none">Texmart.kg</h1>

    <div class="container-fluid my-5">
        <div class="row">
            @include('partials.feature')
        </div>

    </div>
    <div class="container">
        <div class="row justify-content-center py-4">
            @if(count($productions))
                <div class="col-12">
                    <p class="font-weight-bold text-uppercase m-0 pl-4 ">
                        <a href="{{ route('productions.index', ['type' => 'productions']) }}" class="text-dark">Производственные цеха и фабрики</a>
                    </p>
                </div>
                <div class="col-12 mb-5 mt-2 {{ count($productions) <= 5 ? 'row' : '' }}">
                    @include('productions.carousel', ['productions' => $productions])
                </div>
            @endif
            @if(count($products))
                <div class="col-12">
                    <p class="font-weight-bold text-uppercase m-0 pl-4">
                        <a href="{{ route('productions.index', ['type' => 'product']) }}" class="text-dark">Товары</a>
                    </p>
                </div>
                <div class="col-12 mb-5 mt-2 {{ count($products) <= 5 ? 'row' : '' }}">
                    @include('productions.carousel', ['productions' => $products])
                </div>
            @endif
            @if(count($services))
                <div class="col-12">
                    <p class="font-weight-bold text-uppercase m-0 pl-4">
                        <a href="{{ route('productions.index', ['type' => 'service']) }}" class="text-dark">Услуги</a>
                    </p>
                </div>
                <div class="col-12 mb-5 mt-2 {{ count($services) <= 5 ? 'row' : '' }}">
                    @include('productions.carousel', ['productions' => $services])
                </div>
            @endif
            {{--<div class="col-12 mt-3 text-center">--}}
            {{--<a href="{{ route('productions.index') }}" class="btn text-dark text-dotted rounded-0">Больше--}}
            {{--продукций...</a>--}}
            {{--</div>--}}
        </div>
    </div>

    @guest
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <a href="{{ route('register') }}"
                       class="btn btn-danger text-white rounded-0 btn-lg px-5 py-3 shadow-lg scale-on-hover">Зарегистрируйтесь</a>
                    <p class="small mt-2 text-center font-italic text-muted">Для подробной информации свяжитесь с нами</p>
                </div>
            </div>
        </div>
    @endguest

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-lg-7">
                <iframe title="Видео про Texmart" class="w-100 youtube-player" height="200" src="https://www.youtube.com/embed/xTYkmWnwLvg" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="col">
                <h3 class="text-texmart-orange font-weight-bold">Преимущества работы с нами</h3>
                <ul>
                    <li>Новая платформа ориентированная на поиске заказчиков и производителей текстильной и швейной
                        продукции.
                    </li>
                    <li>Технология отслеживания контроля качества продукций</li>
                    <li>Рыночный проект от дешевого до качественного, дорогого продукта швейной и текстильной
                        индустрии
                    </li>
                    <li>Реальные отзывы и рейтинги участников.</li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        @include('partials.pre_register')
        @if(\Illuminate\Support\Facades\Session::has('bid_success'))
            <div class="alert alert-danger alert-dismissible w-25 fixed-bottom fade show" style="left: unset;" role="alert">
                <strong>Ваша заявка была отправлена!</strong> Ожидайте ответа или звонка
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <div class="container py-5">
        <h2 class="text-center h1 mb-5 font-weight-bold">
            Наши партнеры
        </h2>
        <div class="row align-items-center justify-content-between">
            <div class="col-4 col-md-3">
                <a target="_blank" href="https://akilbirs.kg/" rel="noopener"><img data-src="{{ asset("img/ak-ilbirs.png") }}"
                        class="img-fluid lazy grayscale" src=""  alt="Компания Ак-Илбирс"></a>
            </div>
            <div class="col-4 col-md-3">
                <a target="_blank"  href="https://www.bgi.kg/" rel="noopener"><img data-src="{{ asset("img/bgi.png") }}" class="img-fluid lazy grayscale" src=""  alt="Компания BGI Center"></a>
            </div>
            <div class="col-4 col-md-3">
                <a target="_blank"  href="https://textile.kg/" rel="noopener"><img class="img-fluid lazy grayscale" data-src="{{ asset("img/silk_way.png") }}" src=""  alt="Компания Silk Way"></a>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="card-group">
            <div class="card border-0 rounded-0">
                <img data-src="{{ asset('img/cons.jpg') }}" src=""
                     class="card-img lazy rounded-0" alt="Консалтинг">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="h3 text-white position-absolute text-center w-75 bg-warning-50 px-2 py-2 m-0 "
                           style="bottom: 20%;" href="/consulting">Консалтинг</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img data-src="{{ asset('img/contr.jpg') }}" src="" class="card-img lazy rounded-0" alt="Логистика">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="h3 text-white position-absolute text-center w-75 bg-texmart-blue-50 px-2 py-2 m-0"
                           style="bottom: 20%;" href="/logistic">Логистика</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img data-src="{{ asset('img/logi.jpg') }}" src="" class="card-img lazy rounded-0" alt="Контроль Качества">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="h3 text-white position-absolute text-center w-75 bg-texmart-green-50 px-2 py-2 m-0"
                           style="bottom: 20%;" href="/quality">Контроль качества</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

        </div>
    </div>

    <button class="col-12 btn btn-danger rounded-pill scroll-top scale-on-hover" data-scroll="up" type="button">
        <i class="fa fa-chevron-up text-center"></i>
    </button>


    @include('partials.modals.message_modal')

@endsection
@push('scripts')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5f9a88a6c2d02d"></script>

@endpush
@push("scripts")
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script>
        $('.promo-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause: true,
            nav: true,
            lazyLoad:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            },
            dots: false,
            navText: ['<i class="fas fa-arrow-left" aria-hidden="true"></i>', '<i class="fas fa-arrow-right" aria-hidden="true"></i>']
        });
        $('.productions').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            margin: 10,
            nav: true,
            dots: false,
            lazyLoad:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            },
            navText: ['<i class="fas fa-arrow-left" aria-hidden="true"></i>', '<i class="fas fa-arrow-right" aria-hidden="true"></i>']
        });
    </script>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scroll-top').fadeIn();
                } else {
                    $('.scroll-top').fadeOut();
                }
            });

            $('.scroll-top').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 100);
                return false;
            });

        });
    </script>
@endpush

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
@endpush

