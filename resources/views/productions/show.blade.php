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
                                <div class="col-12">
                                    <h1 class="font-weight-bold h2">{{ $production->title }}</h1>
                                </div>

                                <div class="col-12">
                                    <ul id="tree1">
                                        @foreach($categories as $category)
                                            <li>
                                                @if(count($category->childs))
                                                    <i class="fas fa-plus"></i>
                                                @endif
                                                {{ $category->title }}
                                                @if(count($category->childs))
                                                    @include('partials.manageChilds',['childs' => $category->childs])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-12 align-self-end">
                                    <div class="d-flex">
                                        @include('partials.btn.call')
                                        @include('partials.btn.favorite', ['route' => \Illuminate\Support\Facades\Auth::check() ? '' : route('login'), 'data' => 'data-id='.$production->id.''])
                                    </div>
                                </div>

                            </div>
                        </div>

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

                        <div class="col-12 pt-3">
                            <h2 class="font-weight-light h4">Галерея</h2>
                            <div class="gallery">
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto"
                                         alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.right_sidebar')
            </div>
        </div>
    </div>

@endsection

@push('scripts')
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
