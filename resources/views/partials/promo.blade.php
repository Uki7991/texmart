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
            <img src="img/odezhda-veshalka-ruka.jpg" class="img-fluid" alt="...">
            <div class="position-absolute text-dark font-weight-bold bg-white-75 w-100 p-5 text-center promo-carousel-text">
                <h2>Первая интернет платформа швейной и текстильной промышленности Кыргызстана</h2>
            </div>
        </div>
        <div class="item">
            <img src="img/business-document-signing.jpg" class="img-fluid" alt="...">
            <div class="position-absolute text-dark font-weight-bold bg-white-75 w-100 p-5 text-center promo-carousel-text">
                <h2>Консалтинг, оформление всех<br>бухгалтерских и юридических документов</h2>
            </div>
        </div>
        <div class="item">
            <img src="img/867519228d1d5325856fc61d710ded0e_XL.jpg" class="img-fluid" alt="...">
            <div class="position-absolute text-dark font-weight-bold bg-white-75 w-100 p-5 text-center promo-carousel-text">
                <h2>Оценка качества пошива одежды и <br>производства от <span class="text-uppercase">Texmart</span></h2>
            </div>
        </div>
    </div>
</div>
