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
            <img src="img/slide1.jpg" class="img-fluid" alt="Первая интернет платформа  швейной и текстильной  промышленности Кыргызстана">
            <div class="position-absolute slider-text-position">
                <p class="text-uppercase text-white slider-text h2">Первая интернет платформа <br> швейной и текстильной <br> промышленности Кыргызстана</p>
            </div>
        </div>
        <div class="item">
            <img src="img/slide2.jpg" class="img-fluid" alt="Консалтинг,  оформление всех бухгалтерских  и юридических документов">
            <div class="position-absolute slider-text-position">
                <p class="text-uppercase text-white slider-text h2">Консалтинг, <br> оформление всех бухгалтерских <br> и юридических документов</p>
            </div>
        </div>
        <div class="item">
            <img src="img/slide3.jpg" class="img-fluid" alt="Оценка качества пошива одежды  и производства от Texmart.kg  для уверенности на расстоянии">
            <div class="position-absolute slider-text-position">
                <p class="text-uppercase text-white slider-text h2">Оценка качества пошива одежды <br> и производства от Texmart.kg <br> для уверенности на расстоянии</p>
            </div>
        </div>
    </div>
</div>
