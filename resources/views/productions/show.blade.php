@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container py-5">
        <div class="row bg-white p-md-3">
            <div class="col-12 col-md-5 mb-4 mb-lg-0">
                <img
                    src="{{ $production->logo && file_exists('storage/'.$production->logo) ? asset('storage/'.$production->logo) : asset('img/2 lg.jpg') }}"
                    class="img-fluid  shadow-sm"
                    alt="">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12 d-flex align-items-center mb-2">
                        <h1 class="font-weight-bold m-0 mr-3 h2">{{ $production->title }}</h1>
                    </div>
                    <div class="col-12 my-3">
                        <div class="d-flex align-items-center">
                            @include('partials.btn.rateYo', ['id' => 'rateYo'])&nbsp;<span class="h4 m-0 p-0">{{ $rating }} / 5</span>&nbsp;
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            @include('partials.btn.rateYo', ['id' => 'rateYoExpert'])&nbsp;<span class="h4 m-0 p-0">{{ $production->expert ?? 0 }} / 5</span>&nbsp;
                            <p class="small m-0 text-muted">
                                <i class="fas fa-star text-warning"></i>
                                &nbsp;Проверено администрацией Texmart.kg
                            </p>
                        </div>
                    </div>
                    <div class="col-12 ">
                        @if($production->phone1)
                            <div class="phone1 d-flex">
                                <i class="fas fa-phone-alt p-1 d-md-block">&nbsp;</i><a href="tel:"
                                                                                        class="text-dark">{!! $production->phone1 !!}</a>
                            </div>
                        @endif
                        @if($production->phone2)
                            <div class="phone2 d-flex">
                                <i class="fas fa-phone-alt p-1 d-md-block">&nbsp;</i><a href="tel:"
                                                                                        class="text-dark">{!! $production->phone2 !!}</a>
                            </div>
                        @endif
                    </div>
                    @if(true)
                        <div class="col-12 align-self-end my-5">
                            @include('partials.modals.comment')
                        </div>
                    @endif
                    <div class="col-12 my-4 my-lg-0">
                        {{--                        <ul id="tree1">--}}
                        {{--                            @foreach($categories as $category)--}}
                        {{--                                <li>--}}
                        {{--                                    @if(count($category->childs))--}}
                        {{--                                        <i class="fas fa-plus"></i>--}}
                        {{--                                    @endif--}}
                        {{--                                    <a href="#" class="text-dark">{{ $category->title }}</a>--}}
                        {{--                                    @if(count($category->childs))--}}
                        {{--                                        @include('partials.manage_childs',['childs' => $category->childs])--}}
                        {{--                                    @endif--}}
                        {{--                                </li>--}}
                        {{--                            @endforeach--}}
                        {{--                        </ul>--}}

                        <span class="font-weight-bold">Категории:</span> {{ $categories->implode('title', ', ') }}
                    </div>

                    <div class="col-12 mt-5">
                        <div class="d-flex">
                            @include('partials.btn.call', ['id' => $production->id])
                            @include('partials.btn.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$production->id.''])
                        </div>
                    </div>

                </div>
            </div>
            @if(json_decode($production->images))

                <div class="col-12 pt-3">
                    <h2 class="font-weight-light h4">Галерея</h2>
                    <div class="gallery">
                        @foreach(json_decode($production->images) as $image)
                            <a href="{{ asset('storage/'.$image) }}" data-fancybox="gallery">
                                <img
                                    src="{{ $production->logo && file_exists('storage/'.$image) ? asset('storage/'.$image) : asset('img/2 lg.jpg') }}" height="80" width="auto" class=""
                                     alt="">
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="row col-lg-6 col-xl-6">
                <div class="col-12 pt-5">
                    <p class="h5">Бренд:</p>
                    <div class="brand" style="font-weight: bold">
                        {!! $production->brand !!}
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <p class="h5">Адрес:</p>
                    <div class="address">
                        {!! $production->address !!}
                    </div>
                </div>
                @if($production->type == 'productions')
                    <div class="col-12 pt-3">
                        <p class="h5">Количество сотрудников:</p>
                        <div class="amount_production">
                            {!! $production->amount_production !!}
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                        <p class="font-weight-light h5">Оборудование:</p>
                        <div class="tools">
                            {!! $production->tools !!}
                        </div>
                    </div>
                @endif
                <div class="col-12 pt-3">
                    <p class="h5">Описание:</p>
                    <div class="description">
                        {!! $production->description !!}
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <p class="h5">Дата создания объявления:</p>
                    <div class="description">
                        {{ \Carbon\Carbon::make($production->created_at)->formatLocalized('%d %B %Y') }}
                    </div>
                </div>
            </div>

            <div class="row col-lg-6 col-xl-6">

                <div class="col-12 pt-5">
                    <p class="h5">E-mail:</p>
                    <div class="email">
                        {!! $production->email !!}
                    </div>
                </div>
                @if($production->type == 'productions')
                <div class="col-12 pt-3">
                    <p class="font-weight-light h5">Минимальный заказ:</p>
                    <div class="minimum_order">
                        {!! $production->minimum_order !!}
                    </div>
                </div>

                <div class="col-12 pt-3">
                    <p class="h5">Объем прозводства в месяц:</p>
                    <p class="font-weight-light h6">От:</p>
                    <div class="from_amount_production">
                        {!! $production->from_amount_production !!}
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <p class="font-weight-light h6">До:</p>
                    <div class="before_amount_prod">
                        {!! $production->before_amount_prod !!}
                    </div>
                </div>
                @endif
                <div class="col-12 pt-3">
                    <p class="h5">Телефон №1:</p>
                    <div class="phone1">
                        {!! $production->phone1 !!}
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <p class="h5">Телефон №2:</p>
                    <div class="phone2">
                        {!! $production->phone2 !!}
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <p class="h5">Личный сайт:</p>
                    <div class="site">
                        {!! $production->site !!}
                    </div>
                </div>
            </div>
            @if(count($production->getCoordinates()))
                <div class="col-12 col-lg-8 pt-3">
                    <h3>Местонахождение на карте:</h3>
                    <div id="map" style="width: auto; height: 200px;"></div>
                </div>
            @endif
        </div>
        @if(count($production->feedbacks))
            <div class="row">
                <h2>Отзывы</h2>
            </div>
        @php($less = false)
            @foreach($production->feedbacks as $feedback)
                @if($loop->index > 2 && $less == false)
                    <div id="show-more" style="">
                        <a href="#" class="show-more">Показать больше</a>
                    </div>
                    @php($less = true)
                @endif
                <div class="row ty-compact-list">
                    <div class="col-10 my-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                @if($feedback->user->role->name == 'admin')
                                    <p class="small text-muted">
                                        <i class="fas fa-star text-warning"></i>
                                        &nbsp;Проверено администрацией Texmart.kg
                                    </p>
                                @endif
                                <div class="d-flex align-items-center">
                                    <p class="m-0">{{ $feedback->feedback }}</p>
                                    <div class="ml-auto" id="rateYo-{{ $feedback->id }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif

    </div>

    @include('partials.modals.message_modal')

@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
@endpush

@push('scripts')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API_KEY') }}&lang=ru_RU"
            type="text/javascript"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5f9a88a6c2d02d"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        if ($('.ty-compact-list').length > 3) {
            $('.ty-compact-list:gt(2)').hide();
            $('.show-more').show();
        }

        $('.show-more').on('click', function (e) {
            e.preventDefault();
            //toggle elements with class .ty-compact-list that their index is bigger than 2
            $('.ty-compact-list:gt(2)').toggle(300);
            //change text of show more element just for demonstration purposes to this demo
            $(this).text() === 'Показать больше' ? $(this).text('Показать меньше') : $(this).text('Показать больше');
        });
    </script>
    <script src="{{ asset('js/lightbox.min.js') }}"></script>
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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(function () {

            $("#rateYo").rateYo({
                rating: '{{ $rating ? $rating : '0' }}',
                halfStar: true,
                readOnly: true,
                starWidth: "20px"
            });
            $("#rateYoExpert").rateYo({
                rating: '{{ $production->expert ? $production->expert : '0' }}',
                halfStar: true,
                readOnly: true,
                starWidth: "20px"
            });
            @if(count($production->feedbacks))
            @foreach($production->feedbacks as $feedback)
            $("#rateYo-{{ $feedback->id }}").rateYo({
                rating: '{{ $feedback->rating ? $feedback->rating : '0' }}',
                halfStar: true,
                readOnly: true,
                starWidth: "20px"
            });
            @endforeach
            @endif
            $("#rateYo1").rateYo({
                rating: '0',
                fullStar: true,
                starWidth: "20px"
            }).on("rateyo.set", function (e, data) {

                let rating = data.rating;
                console.log(rating);
                $('#input_rating').val(rating);
            });
        });
    </script>
    @include('partials.scripts.favorite_btn')
    @includeWhen(\Illuminate\Support\Facades\Auth::user(), 'partials.scripts.favorite_click')
    @include('partials.scripts.call_btn')
    <script>
        $.fn.extend({
            treed: function (o) {

                var openedClass = 'fa-plus';
                var closedClass = 'fa-minus';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                }

                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    });
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function () {
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
    </script>
@endpush
