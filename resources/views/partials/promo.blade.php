{{--<div class="jumbotron jumbotron-fluid position-relative pt-0" style="background: url('{{ asset('img/898714.jpg') }}') no-repeat; background-size: cover; background-position: center center;">--}}
{{--    <div class="backdrop"></div>--}}
{{--    @include('partials.header', ['theme' => 'dark', 'color' => 'white'])--}}
{{--    <div class="container my-5 py-5 text-light position-relative ">--}}
{{--        <h1 class="">Найдите свое производство</h1>--}}
{{--        <p class="lead font-italic">Texmart - список производств на любой вкус!</p>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="" style="">
    <div class="backdrop"></div>

    @include('partials.header', ['theme' => 'dark', 'color' => 'white'])

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="img/odezhda-veshalka-ruka (2).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                    <h1>Найдите свое производство</h1>
                    <p>Первая интернет платформа швейной и текстильной промышленности Кыргызстана</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/business-document-signing (1).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Колсантинг</h1>
                    <p>Оформление всех бухгалтерских и юридических документов.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/867519228d1d5325856fc61d710ded0e_XL.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Качество</h1>
                    <p>Оценка качества пошива одежды и производства Texmart.kg.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
