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
            <img src="img/slide1.jpg" class="img-fluid" alt="...">
            <div class="position-absolute slider-text-position">
                <h2 class="text-uppercase text-white slider-text">Первая интернет платформа <br> швейной и текстильной <br> промышленности Кыргызстана</h2>
            </div>
        </div>
        <div class="item">
            <img src="img/slide2.jpg" class="img-fluid" alt="...">
            <div class="position-absolute slider-text-position">
                <h2 class="text-uppercase text-white slider-text">Консалтинг, <br> оформление всех бухгалтерских <br> и юридических документов</h2>
            </div>
        </div>
        <div class="item">
            <img src="img/slide3.jpg" class="img-fluid" alt="...">
            <div class="position-absolute slider-text-position">
                <h2 class="text-uppercase text-white slider-text">Оценка качества пошива одежды <br> и производства от Texmart.kg <br> для уверенности на расстоянии</h2>
            </div>
        </div>
    </div>
</div>
