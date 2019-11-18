@extends('layouts.app')

@section('title')
    Texmart.kg - онлайн платформа оптовых производителей в Киргизии
@endsection
@section('seo_content')
    <meta name="description" content="Texmart.kg это первая интернет-платформа оптовых производителей текстильной и швейной продукции Кыргызской Республики. Вы можете заказать одежду оптом по очень низким ценам! Ведение бизнеса в формате В2В. Услуга логистики и доставки. Оформление документов экспортно-импортных документов.">
    <meta name="keywords" content="texmart, техмарт, оптом, одежда, оптовая, бишкек, киргизия, кыргызстан, детская, мужская, женская, батальные, размеры, купить, купить одежду, оптовики, оптовая одежда, купить оптом, одежда оптом">
@endsection
@section('og_content')
    <meta property="og:title" content="Texmart.kg - онлайн платформа оптовых производителей в Киргизии" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="{{ asset('img/logo.png') }}" />
@endsection
@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
@endpush

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
    @include('blocks.announcement')
    @include('blocks.reviews')
    @include('blocks.blog')
    @includeWhen(!auth()->check(), 'blocks.form')
    @include('blocks.partners')
    @include('blocks.buttons.submit_your_application')
    @include('blocks.buttons.scroll-top')
    {{--@include('partials.modals.10_seconds')--}}
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css">
    <link rel="stylesheet" href="{{asset('css/jquery.steps.css')}}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
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
                }, 1000);
                return false;
            });

        });
    </script>
    <script>

        $(function ()
        {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                transitionEffectSpeed: 500,

            });
        });


    </script>
@endpush
