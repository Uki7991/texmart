@extends('layouts.app')
@section('seo_content')
    <meta name="description" content="Texmart.kg это первая интернет-платформа оптовых производителей текстильной и швейной продукции Кыргызской Республики. Вы можете заказать одежду оптом по очень низким ценам! Ведение бизнеса в формате В2В. Услуга логистики и доставки. Оформление документов экспортно-импортных документов.">
    <meta name="keywords" content="texmart, техмарт, оптом, одежда, оптовая, бишкек, киргизия, кыргызстан, детская, мужская, женская, батальные, размеры, купить, купить одежду, оптовики, оптовая одежда, купить оптом, одежда оптом, {{ $production->title }}">
@endsection
@section('og_content')
    <meta property="og:title" content="Texmart.kg - {{ $production->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="{{ asset('storage/'. $production->logo) }}" />
@endsection
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="{{ asset('storage/'.$production->logo) }}" data-fancybox="gallery">
                                <img src="{{ $production->logo && file_exists('storage/'.$production->logo) ? asset('storage/'.$production->logo) : asset('img/2 lg.jpg') }}" alt="">
                            </a>
                        </div>
                        @foreach(json_decode($production->images) as $image)
                            <div class="item">
                                <a href="{{ asset('storage/'.$image) }}" data-fancybox="gallery">
                                    <img src="{{ $production->logo && file_exists('storage/'.$image) ? asset('storage/'.$image) : asset('img/2 lg.jpg') }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="{{ asset('storage/'.$production->logo) }}" data-fancybox="gallery">
                                <img src="{{ $production->logo && file_exists('storage/'.$production->logo) ? asset('storage/'.$production->logo) : asset('img/2 lg.jpg') }}" alt="">
                            </a>
                        </div>
                        @foreach(json_decode($production->images) as $image)
                            <div class="item">
                                <a href="{{ asset('storage/'.$image) }}" data-fancybox="gallery">
                                    <img src="{{ $production->logo && file_exists('storage/'.$image) ? asset('storage/'.$image) : asset('img/2 lg.jpg') }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col">
                    <p class="h4 mb-5">
                        Мужские толстовки
                        @include('partials.btn.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$production->id.''])

                    </p>
                    <a class="border border-texmart rounded-pill bg-texmart-sidebar text-white py-2 px-2 ">
                        Ветровки и толстовки
                    </a>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="my-3" id="rateYo"></div>
                        </li>
                        <li class="list-inline-item">
                            <a href="#reviews-show" class="text-dark text-dashed">
                                25 отзывов
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-dark">
                                написать отзыв
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto align-self-start">
                    <div class="share_customer">
                        <span class="span_share font-weight-bold">Поделиться:</span>
                        <div class="social_buttons" style="padding: 4px">
                            <a href="javascript:void(0)" title="vk" class="social-share-btn" data-url="{{ request()->url() }}" data-social="vk" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">
                                <i class="fab fa-vk mr-3 fa-lg nav-scale"></i>
                            </a>
{{--                            <a href="javascript:void(0)" title="instagram" class="social-share-btn" data-url="{{ request()->url() }}" data-social="instagram" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">--}}
{{--                                <i class="fab fa-instagram mr-3 fa-lg nav-scale"></i>--}}
{{--                            </a>--}}
                            <a href="javascript:void(0)" title="facebook" class="social-share-btn" data-url="{{ request()->url() }}" data-social="facebook" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">
                                <i class="fab fa-facebook mr-3 fa-lg nav-scale"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-2 mt-1">

                    <div class="col-12">

                        <div class="card">


                            <div class="card-body">
                                <div class="row mb-5 justify-content-end">
                                    <div class="col-auto">
                                        <span class="small">Проверено администрацией Texmart.kg</span>

                                        <div id="rateYo1"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-4">
                                        <p class="mb-1">
                                            Бренд:
                                        </p>
                                        {{ $production->brand }}
                                    </div>
                                    <div class="col-4 mb-4">
                                        <p class="mb-1">
                                            Адрес:
                                        </p>
                                        {{ $production->address }}
                                    </div>



                                    <div class="col-4 mb-4">
                                        <p class="mb-1">
                                            Дата создания объявления:
                                        </p>
                                        {{ \Carbon\Carbon::make($production->created_at)->formatLocalized('%d %B %Y') }}

                                    </div>

                                    <hr class="w-100 mt-0">
                                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                                        <p class="mb-1">
                                            E-mail:
                                        </p>
                                        {{ $production->email ?? 'Нет Email' }}

                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                                        <p class="mb-1">
                                            Телефон №1:
                                        </p>
                                        {{ $production->phone1 ?? 'Нет телефона №1' }}

                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                                        <p class="mb-1">
                                            Телефон №2:
                                        </p>
                                        {{ $production->phone2 ?? 'Нет телефона №2' }}

                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                                        <p class="mb-1">
                                            Личный сайт:
                                        </p>
                                        {{ $production->site ?? 'Нет сайта' }}

                                    </div>


                                    <div class="col-12 mb-4">
                                        <p>
                                            Описание:
                                        </p>
                                        {!! $production->description !!}

                                    </div>
                                    <div class="col-12">
                                        @if(count($production->getCoordinates()))
                                            <h3>Местонахождение на карте:</h3>
                                            <div id="map" style="width: auto; height: 200px;"></div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">

                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    {{--style for owl carousel--}}
    <style>
        #sync1 .item {
            background: gold;
            padding: 1px 0px;
            margin: 5px;
            color: #FFF;
            border-radius: 3px;
            text-align: center;
        }

        #sync2 .item {
            background: red;
            padding: 5px 0px;
            margin: 5px;
            color: #FFF;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
        }

        #sync2 .item h1 {
            font-size: 18px;
        }

        #sync2 .current .item {
            background: gold;
        }

        .owl-theme .owl-nav [class*='owl-'] {
            transition: all 0.3s ease;
        }

        .owl-theme .owl-nav [class*='owl-'].disabled:hover {
            background-color: gold;
        }

        #sync1.owl-theme {
            position: relative;
        }

        #sync1.owl-theme .owl-next,
        #sync1.owl-theme .owl-prev {
            width: 22px;
            height: 40px;
            margin-top: -20px;
            position: absolute;
            top: 50%;
        }

        #sync1.owl-theme .owl-prev {
            left: 10px;
        }

        #sync1.owl-theme .owl-next {
            right: 10px;
        }

    </style>
@endpush

@push('scripts')
    <script>
            $('.social-share-btn').click(e => {
                let btn = $(e.currentTarget);
                let social = btn.data('social');
                let url = btn.data('url');
                let text = btn.data('text');

                if (social == 'facebook') {
                    url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                    window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
                }
                if (social == 'vk') {
                    url = 'https://vk.com/share.php?url=' + url;
                    window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
                }
                // if (social == 'instagram') {
                //     window.open($(this).attr("href", 'https://vk.com/share.php?url=' + url), "popupWindow", "width=600,height=600,scrollbars=yes");
                // }
            })
    </script>
    @includeWhen(auth()->check(), 'partials.scripts.favorite_click')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API_KEY') }}&lang=ru_RU"
            type="text/javascript"></script>
    @if(count($production->getCoordinates()))
        <script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API_KEY') }}&lang=ru_RU"
                type="text/javascript"></script>
        <script type="text/javascript">
            ymaps.ready(init);
            function init() {
                let production = new ymaps.Placemark(['{{ $production->getCoordinates()[0]["lng"] }}', '{{ $production->getCoordinates()[0]["lat"] }}'],
                    {}, {
                        preset: 'islands#icon',
                        color: '#0095b6'
                    });
                var myMap = new ymaps.Map("map", {
                    center: ['{{ $production->getCoordinates()[0]["lng"] }}', '{{ $production->getCoordinates()[0]["lat"] }}'],
                    zoom: 13
                });
                myMap.geoObjects.add(production);
            }
        </script>
    @endif
    {{--two owl carousels--}}}
    <script>
        $(document).ready(function () {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4;
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: true,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function () {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage,
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {

                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function (e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });

            $('.owl-next').click(function () {

                $('.owl-carousel').trigger('stop.owl.autoplay');

            });

        });


    </script>

    {{--rateyo.js--}}
    <script>
        $(function () {

            $("#rateYo").rateYo({
                rating: '{{ $rating ? $rating : '4' }}',
                halfStar: true,
                readOnly: true,
                starWidth: "20px"
            });

        });
    </script>
    <script>
        $(function () {

            $("#rateYo1").rateYo({
                rating: '{{ $rating ? $rating : '4' }}',
                halfStar: true,
                readOnly: true,
                starWidth: "20px"
            });
        });

    </script>

@endpush
