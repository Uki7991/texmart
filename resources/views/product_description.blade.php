@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="mt-xl-5 pt-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                            <h1>1</h1></div>
                        <div class="item">
                            <h1>2</h1></div>
                        <div class="item">
                            <h1>3</h1></div>
                        <div class="item">
                            <h1>4</h1></div>
                        <div class="item">
                            <h1>5</h1></div>
                        <div class="item">
                            <h1>6</h1></div>
                        <div class="item">
                            <h1>7</h1></div>
                        <div class="item">
                            <h1>8</h1></div>
                    </div>

                    <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                            <h1>1</h1></div>
                        <div class="item">
                            <h1>2</h1></div>
                        <div class="item">
                            <h1>3</h1></div>
                        <div class="item">
                            <h1>4</h1></div>
                        <div class="item">
                            <h1>5</h1></div>
                        <div class="item">
                            <h1>6</h1></div>
                        <div class="item">
                            <h1>7</h1></div>
                        <div class="item">
                            <h1>8</h1></div>
                    </div>

                </div>

                <div class="col-lg-9">
                    <a class="border border-texmart rounded-pill bg-texmart-sidebar text-white py-2 px-2 ">
                        Ветровки и толстовки
                    </a>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="my-3" id="rateYo"></div>
                        </li>
                        <li class="list-inline-item">
                            <a href="">
                                25 отзывов
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">
                                написать отзыв
                            </a>
                        </li>
                    </ul>
                    <div class="col-12">
                        <div class="card">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    {{--style for owl carousel--}}
    <style>
        #sync1 .item {
            background: gold;
            padding: 80px 0px;
            margin: 5px;
            color: #FFF;
            border-radius: 3px;
            text-align: center;
        }
        #sync2 .item {
            background: red;
            padding: 10px 0px;
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

    {{--two owl carousels--}}}
    <script>
        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4;
            var syncedSecondary = true;

            sync1.owlCarousel({
                items : 1,
                slideSpeed : 2000,
                nav: true,
                autoplay: true,
                dots: false,
                loop: true,
                responsiveRefreshRate : 200,
                navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function () {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items : slidesPerPage,
                    dots: false,
                    nav: false,
                    smartSpeed: 200,
                    slideSpeed : 500,
                    slideBy: slidesPerPage,
                    responsiveRefreshRate : 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {

                var count = el.item.count-1;
                var current = Math.round(el.item.index - (el.item.count/2) - .5);

                if(current < 0) {
                    current = count;
                }
                if(current > count) {
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
                if(syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });

            $('.owl-next').click(function(){

                $('.owl-carousel').trigger('stop.owl.autoplay');

            });

        });



    </script>

    {{--rateyo.js--}}
    <script>
        $(function () {

            $("#rateYo").rateYo({
                normalFill: "#A0A0A0",
                starWidth: "20px"
            });

        });
        // Getter
        var normalFill = $("#rateYo").rateYo("option", "normalFill"); //returns "#A0A0A0"

        // Setter
        $("#rateYo").rateYo("option", "normalFill", "#B0B0B0"); //returns a jQuery Element
        // Getter
        var starWidth = $("#rateYo").rateYo("option", "starWidth"); //returns 40px

        // Setter
        $("#rateYo").rateYo("option", "starWidth", "20px"); //returns a jQuery Element
    </script>
@endpush
