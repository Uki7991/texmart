@extends('layouts.app')

@section('title')
    Texmart - онлайн платформа
@endsection

@section('content')
    {{--<div class="contaner-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col px-0 bg-texmart-sidebar">--}}
                {{----}}
            {{--</div>--}}

            {{--<div class="col-11 px-0">--}}
                {{--@include('blocks.middle_panel')--}}
                {{--@include('blocks.our_advantages')--}}
                {{--@include('blocks.partners')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@include('partials.modals.10_seconds')--}}
    <div class="container">
        @include('blocks.side_panel')
    </div>
    @include('blocks.middle_panel')
    @include('blocks.our_advantages')
    @include('blocks.applications')
    @include('blocks.partners')

    <button class="col-12 btn-danger rounded-pill scroll-top scale-on-hover" data-scroll="up" type="button">
        <i class="fa fa-chevron-up text-center"></i>
    </button>

{{--    @include('partials.modals.10_seconds')--}}
@endsection
@push('styles')
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
    <script>
        $(document).ready(function () {
            $('.fancybox-media').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
        });
    </script>
@endpush
