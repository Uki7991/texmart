@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col-5">
                            <img src="{{ asset('img/2 lg.jpg') }}" class="img-fluid shadow-sm"
                                 alt="">
                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class="col-12 d-flex h-25 align-items-center">
                                    <h1 class="font-weight-bold m-0 mr-3 h2">{{ $production->title }}</h1>
                                    @include('partials.btn.rateYo')
                                </div>

                                <div class="col-12">
                                    <ul id="tree1">
                                        @foreach($categories as $category)
                                            <li>
                                                @if(count($category->childs))
                                                    <i class="fas fa-plus"></i>
                                                @endif
                                                    <a href="#" class="text-dark">{{ $category->title }}</a>
                                                @if(count($category->childs))
                                                    @include('partials.manage_childs',['childs' => $category->childs])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-12 align-self-end">
                                    <div class="d-flex">
                                        @include('partials.btn.share')
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
                                        <a href="{{ asset('storage/productions/'.$image) }}" data-lightbox="gallery">
                                            <img src="{{ asset('storage/productions/'.$image) }}" height="80" width="auto"
                                                 alt="">
                                        </a>
                                    @endforeach
                            </div>
                        </div>
                        @endif


                        <div class="col-12 pt-5">
                            <div class="description">
                                {!! $production->description !!}
                            </div>
                        </div>

                        <div class="col-12 pt-3">
                            <h2 class="font-weight-light h4">Оборудование</h2>
                            <div class="tools">
                                <ul>
                                    <li>Швейная машина: maestro 13</li>
                                    <li>Закройная машина: model fr-12</li>
                                </ul>
                            </div>
                        </div>
                        @if(count($production->getCoordinates()))
                            <div class="col-12 pt-3">
                                <div id="map" style="width: 600px; height: 400px"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.modals.message_modal')

@endsection

@push('styles')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
@endpush

@push('scripts')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5f9a88a6c2d02d"></script>

    <script src="{{ asset('js/lightbox.min.js') }}"></script>
    @if(count($production->getCoordinates()))
        <script src="https://api-maps.yandex.ru/2.1/?apikey=313eee03-ed05-406c-b163-190f6e578f48&lang=ru_RU" type="text/javascript"></script>
        <script type="text/javascript">
            ymaps.ready(init);
            function init(){
                let production= new ymaps.Placemark(['{{ $production->getCoordinates()[0]["lng"] }}', '{{ $production->getCoordinates()[0]["lat"] }}'],
                    {}, {
                        preset: 'islands#icon',
                        color: '#0095b6'
                    });
                var myMap = new ymaps.Map("map", {
                    center: [42.865388923088396, 74.60104350048829],
                    zoom: 13
                });
                myMap.geoObjects.add(production);
                myMap.setBounds(myMap.geoObjects().getBounds());
            }
        </script>
    @endif
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(function () {

            $("#rateYo").rateYo({
                rating: '{{ $production->rating }}',
                halfStar: true,
                starWidth: "20px"
            }).on("rateyo.set", function (e, data) {

                let rating = data.rating;
                console.log(rating);
                $.ajax({
                    url: '{{ route('productions.rate') }}',
                    method: 'get',
                    data: {
                        id: '{{ $production->id }}',
                        rating: rating,
                        _csrf: '{{ csrf_token() }}'
                    },
                    success: data => {
                        console.log(data);
                    },
                    error: () => {
                        console.log('error');
                    }
                })
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

                if (typeof o != 'undefined'){
                    if (typeof o.openedClass != 'undefined'){
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined'){
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
                tree.find('.branch .indicator').each(function(){
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
