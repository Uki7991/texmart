@extends('layouts.app')

@section('content')
    @include('partials.header')
    <div class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="{{ asset('storage/'.$user->avatar) }}" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h1 class="text-capitalize">{{ $user->name }}</h1>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-auto box">
                    <ul class="nav flex-column ">
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.settings') }}" class="nav-link text-light">Настройки</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.favorites') }}" class="nav-link text-light">Избранные</a>
                        </li>
{{--                        <li class="nav-item bg-texmart-blue border">--}}
{{--                            <a href="#messages" class="nav-link text-light" id="messages-tab" data-toggle="tab" role="tab" aria-controls="messages" aria-selected="false">Чат</a>--}}
{{--                        </li>--}}
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.announce') }}" class="nav-link text-light">Мои объявления</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.production.create') }}" class="nav-link text-light">Подать производство</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.service.create') }}" class="nav-link text-light">Подать услугу</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="{{ route('user.product.create') }}" class="nav-link text-light">Подать товар</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    @yield('office')
                </div>
            </div>
        </div>
    </div>

    @include('partials.modals.message_modal')

@endsection

@push('styles')

@endpush

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API_KEY') }}&lang=ru_RU" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/comboTreePlugin.js') }}"></script>
    <script src="{{ asset('js/icontains.js') }}"></script>
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
        $('#tree2').treed();
        $('#tree3').treed();

        $("body").on('click', '.select2-results__group', function() {
            $(this).siblings().toggle();
        });
    </script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.richTextBox'
        });
        tinymce.init({
            selector: '#equipment'
        });
    </script>
    @include('partials.scripts.favorite_click')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
    @stack('scripts_profile')
@endpush
