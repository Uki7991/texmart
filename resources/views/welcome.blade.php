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
                <a href="{{ route('register') }}" class="btn btn-danger text-white rounded-0 btn-lg px-5 py-3 shadow-lg">Зарегистрируйтесь</a>
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
                <iframe class="w-100 youtube-player" height="200" src="https://www.youtube.com/embed/Ws65T4DPuT0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="col">
                <h3 class="text-texmart-orange font-weight-bold">Преимущества работы с нами</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iste, sapiente. Accusamus alias amet consequatur ea error esse eveniet libero mollitia nemo, nostrum omnis porro qui, quo soluta vel voluptas!
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold text-underline pb-3">Производственные цеха</h2>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            <div class="col-12 text-center">
                <h2 class="font-weight-bold text-underline pb-3">Товары</h2>
            </div>
            <div class="col-12 mt-3">
                @include('productions.carousel')
            </div>
            <div class="col-12 text-center">
                <h2 class="font-weight-bold text-underline pb-3">Услуги</h2>
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
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100" style="bottom: 10%;" href="http://texmart/consulting">Консалтинг</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img src="{{ asset('img/daf-xf105-460-truck-white-daf.jpg') }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100" style="bottom: 10%;" href="http://texmart/logistic">Логистика</a>
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <img src="{{ asset('img/checklist.jpg') }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay p-0">
                    <div class="">
                        <a class="font-weight-bold h3 text-white position-absolute text-center w-100" style="bottom: 10%;" href="http://texmart/quality">Контроль качества</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

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
