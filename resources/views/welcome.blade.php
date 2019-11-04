@extends('layouts.app')

@section('title')
    Texmart - онлайн платформа
@endsection

@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container d-xl-none">
            @include('blocks.header')
        </div>
    </section>
    <div class="container d-none d-xl-block">
        @include('blocks.side_panel')
    </div>
    @include('blocks.middle_panel')
    @include('blocks.category')
{{--    <div class="jumbotron">--}}
{{--        <h1 data-step="1" data-intro="This is a tooltip!">Basic Usage</h1>--}}
{{--        <p class="lead" data-step="4" data-intro="Another step.">This is the basic usage of IntroJs, with <code>data-step</code> and <code>data-intro</code> attributes.</p>--}}
{{--        <a class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Show me how</a>--}}
{{--    </div>--}}

    @include('blocks.our_advantages')
    @include('blocks.applications')
    @include('blocks.announcement')
    @include('blocks.reviews')
    @include('blocks.blog')
    @include('blocks.form')
    @include('blocks.partners')

    @include('blocks.buttons.submit_your_application')
    @include('blocks.buttons.scroll-top')


{{--    @include('partials.modals.10_seconds')--}}
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js">    </script>
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
