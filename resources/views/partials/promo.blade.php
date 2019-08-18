{{--<div class="jumbotron jumbotron-fluid position-relative pt-0" style="background: url('{{ asset('img/898714.jpg') }}') no-repeat; background-size: cover; background-position: center center;">--}}
{{--    <div class="backdrop"></div>--}}
{{--    @include('partials.header', ['theme' => 'dark', 'color' => 'white'])--}}
{{--    <div class="container my-5 py-5 text-light position-relative ">--}}
{{--        <h1 class="">Найдите свое производство</h1>--}}
{{--        <p class="lead font-italic">Texmart - список производств на любой вкус!</p>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="position-relative" style="">
    <div class="backdrop"></div>

    @include('partials.header')

    <div class="promo-carousel owl-carousel owl-theme">
        <div class="item">
            <img src="img/odezhda-veshalka-ruka.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="item">
            <img src="img/business-document-signing.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="item">
            <img src="img/867519228d1d5325856fc61d710ded0e_XL.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
