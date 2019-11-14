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
    <div class="container">
        <div class="row justify-content-center">
            @include('partials.modals.registration-form')
        </div>
    </div>
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

    {{--@include('partials.modals.modal_for_registration')--}}
{{--    <div class="container">--}}
{{--        <div id="wizard" role="application" class="wizard clearfix">--}}
{{--            <div class="steps clearfix">--}}
{{--                <ul role="tablist">--}}
{{--                    <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a--}}
{{--                            id="wizard-t-0" href="#wizard-h-0" aria-controls="wizard-p-0"><span--}}
{{--                                class="current-info audible">current step: </span><span class="number">1.</span>--}}
{{--                            First Step</a></li>--}}
{{--                    <li role="tab" class="disabled" aria-disabled="true"><a id="wizard-t-1" href="#wizard-h-1"--}}
{{--                                                                            aria-controls="wizard-p-1"><span--}}
{{--                                class="number">2.</span> Second Step</a></li>--}}
{{--                    <li role="tab" class="disabled last" aria-disabled="true"><a id="wizard-t-2" href="#wizard-h-2"--}}
{{--                                                                                 aria-controls="wizard-p-2"><span--}}
{{--                                class="number">3.</span> Third Step</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="content clearfix">--}}
{{--                <h2 id="wizard-h-0" tabindex="-1" class="title current">First Step</h2>--}}
{{--                <section id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" class="body current"--}}
{{--                         aria-hidden="false">--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu--}}
{{--                        sem, hendrerit a tempor quis,--}}
{{--                        sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget--}}
{{--                        quam libero. Nam at felis metus.--}}
{{--                        Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>--}}
{{--                </section>--}}

{{--                <h2 id="wizard-h-1" tabindex="-1" class="title">Second Step</h2>--}}
{{--                <section id="wizard-p-1" role="tabpanel" aria-labelledby="wizard-h-1" class="body"--}}
{{--                         aria-hidden="true" style="display: none;">--}}
{{--                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula--}}
{{--                        elementum pellentesque.--}}
{{--                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit.--}}
{{--                        Morbi varius, nulla quis condimentum--}}
{{--                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit--}}
{{--                        sapien a diam adipiscing consectetur.--}}
{{--                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit--}}
{{--                        amet, consectetur adipiscing elit.--}}
{{--                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus--}}
{{--                        sagittis iaculis nec, malesuada a diam.--}}
{{--                        Donec non pulvinar urna. Aliquam id velit lacus.</p>--}}
{{--                </section>--}}

{{--                <h2 id="wizard-h-2" tabindex="-1" class="title">Third Step</h2>--}}
{{--                <section id="wizard-p-2" role="tabpanel" aria-labelledby="wizard-h-2" class="body"--}}
{{--                         aria-hidden="true" style="display: none;">--}}
{{--                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo--}}
{{--                        condimentum dapibus. Fusce eros justo,--}}
{{--                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius--}}
{{--                        ullamcorper. Aliquam erat volutpat.--}}
{{--                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo--}}
{{--                        lectus sollicitudin in auctor mauris--}}
{{--                        venenatis.</p>--}}
{{--                </section>--}}

{{--            </div>--}}
{{--            <div class="actions clearfix">--}}
{{--                <ul role="menu" aria-label="Pagination">--}}
{{--                    <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>--}}
{{--                    <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>--}}
{{--                    <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
