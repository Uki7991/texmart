@extends('layouts.app')

@section('content')

    @include('partials.promo')


    <div class="container my-5">
        <div class="row">
            @include('partials.feature')
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ route('register') }}" class="btn btn-danger rounded-0 btn-lg px-5 py-3 shadow-lg">Зарегистрируйтесь</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-10">
                <iframe class="w-100 youtube-player" src="https://www.youtube.com/embed/Ws65T4DPuT0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold text-underline pb-3">Продукции и цеха</h2>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            <div class="col-12 mt-3 text-center">
                <a href="{{ route('productions.index') }}" class="btn text-dark text-dotted rounded-0">Больше
                    продукций...</a>
            </div>
        </div>
    </div>
    <div>
        @include('partials.pre_register')
    </div>


    <div class="container">
        <div class="row">

        </div>
    </div>


{{--    <div class="col tender">--}}
{{--        <div class="container">--}}
{{--            <h2>--}}
{{--                <span class=""></span>--}}
{{--                "Задайте вопрос!?"--}}
{{--            </h2>--}}
{{--            <div class="inner">--}}
{{--                <div class="left">--}}
{{--                    <div class="text">--}}
{{--                        <span>Задай один вопрос.</span>--}}
{{--                        <span>Получи несколько предложений.</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container">
        <div class="row justify-content-center py-4">

        </div>
    </div>

    <div class="services">
        <div class="services--service">
            <p>Texmart <span>Quality </span></p>
        </div>
        <div class="services--service">
            <p>Texmart <span>Quality </span></p>
        </div>
        <div class="services--service">
            <p>Texmart <span>Quality </span></p>
        </div>

    </div>

    @include('partials.modals.message_modal')


@endsection
@push("scripts")
    <script src="{{ asset("js/owl.carousel.min.js") }}">

    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endpush

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
@endpush
