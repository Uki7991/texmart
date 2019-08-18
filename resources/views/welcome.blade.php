@extends('layouts.app')

@section('content')

    @include('partials.promo')


    <div class="container-fluid my-5">
        <div class="row">
            @include('partials.feature')
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ route('register') }}"
                   class="btn btn-danger text-white rounded-0 btn-lg px-5 py-3 shadow-lg scale-on-hover">Зарегистрируйтесь</a>
                <p class="small mt-2 text-center font-italic text-muted">Для подробной информации свяжитесь с нами</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">

            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-lg-7">
                <iframe class="w-100 youtube-player" height="200" src="https://www.youtube.com/embed/Ws65T4DPuT0"
                        frameborder="0"
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
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12">
                <p class="font-weight-bold text-uppercase m-0 border-left pl-4 border-warning border-25">Производственные цеха и фабрики</p>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            <div class="col-12">
                <p class="font-weight-bold text-uppercase m-0 border-left pl-4 border-texmart-green border-25">Товары</p>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            <div class="col-12">
                <p class="font-weight-bold text-uppercase m-0 border-left pl-4 border-texmart-blue border-25">Услуги</p>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            {{--<div class="col-12 mt-3 text-center">--}}
            {{--<a href="{{ route('productions.index') }}" class="btn text-dark text-dotted rounded-0">Больше--}}
            {{--продукций...</a>--}}
            {{--</div>--}}
        </div>
    </div>
    <div>
        @include('partials.pre_register')
    </div>

    <div class="pt-5">
        <div class="card-group">
            <div class="card border-0 rounded-0">
                <img src="{{ asset('img/business-document-signing (2).jpg') }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100 nav-scale"
                           style="bottom: 10%;" href="http://texmart/consulting">Консалтинг</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img src="{{ asset('img/daf-xf105-460-truck-white-daf.jpg') }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100 nav-scale"
                           style="bottom: 10%;" href="http://texmart/logistic">Логистика</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img src="{{ asset('img/checklist.jpg') }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100 nav-scale"
                           style="bottom: 10%;" href="http://texmart/quality">Контроль качества</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

        </div>
    </div>

    <button class="btn btn-danger scroll-top scale-on-hover" data-scroll="up" type="button">
        <i class="fa fa-chevron-up text-center"></i>
    </button>


    @include('partials.modals.message_modal')


@endsection
@push("scripts")
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
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
            }
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
