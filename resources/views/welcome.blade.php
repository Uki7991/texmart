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
    @include('blocks.our_advantages')
    @include('blocks.applications')
    @include('blocks.sliders')
    @include('blocks.reviews')
    @include('blocks.blog')
    @include('blocks.form')
    @include('blocks.partners')

    @include('blocks.buttons.submit_your_application')
    @include('blocks.buttons.scroll-top')


{{--    @include('partials.modals.10_seconds')--}}
@endsection
@push('styles')

@endpush
@push('scripts')
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
