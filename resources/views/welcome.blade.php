@extends('layouts.app')

@section('title')
    Texmart - онлайн платформа
@endsection

@section('content')

    <div class="container">
        @include('blocks.side_panel')
    </div>
    @include('blocks.middle_panel')
    @include('blocks.our_advantages')
    @include('blocks.applications')
    @include('blocks.blog')
    @include('blocks.partners')

    <button class="col-12 btn-danger rounded-pill scroll-top scale-on-hover" data-scroll="up" type="button">
        <i class="fa fa-chevron-up text-center"></i>
    </button>

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
