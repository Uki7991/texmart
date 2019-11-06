<div class="container mt-5 pb-5 text-center">
    <a href="{{ route('blog_index') }}" class="text-center h2 " style="color: #e99b33 !important;padding-bottom: 25px;text-align: center">
        Наш Блог
    </a>
    <div class="row pt-3">
        <div class="col-12 col-md-4 col-lg-4 col-sm-12 pb-sm-5 mb-4 mb-md-1">
            <div class="card">
                <img class="card-img-top lazy" data-src="{{ asset('img/blog_1.png') }}" src="" alt="Card image cap">
                <div class="card-body pb-3 pb-md-4">
                    <p>28.09.19</p>
                    <h4 class="card-title"><a>Какая-то тема</a></h4>
                    <p class="card-text">Сайт рыбатекст поможет дизайнеру,
                        верстальщику, вебмастеру</p>
                    <div class="row justify-content-end">
                        <a href="#" class="text-white btn-texmart">Читать>></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 mb-md-4 mb-sm-2">
            <div class="card mb-3">
                <img src="" data-src="{{ asset('img/blog_2.png') }}" class="card-img-top lazy" alt="...">
                <div class="card-body mb-3 mb-md-2 pb-md-3 pb-lg-3">
                    <p class="card-text"><small class="text-muted">28.09.19</small></p>
                    <h5 class="card-title text-center">Какая-то тема</h5>
                    <p class="card-text text-center">Сайт рыбатекст поможет дизайнеру, верстальщику,
                        вебмастеру сгенерировать несколько абзацев более
                        менее осмысленного текста</p>
                    <div class="row justify-content-center mx-0">
                        <a href="#" class="text-white btn-texmart">Читать>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="card-deck">
            <div class="card card-image lazy"
                 style="background-image: url({{asset('img/blog_3.png')}});background-repeat: no-repeat;background-size: cover">
                <div class="text-white text-center d-flex align-items-center  py-5 px-4">
                    <div>
                        <h5 class="white-text">28.09.19</h5>
                        <h3 class="card-title pt-2"><strong>Какая-то тема</strong></h3>
                        <p>Сайт рыбатекст поможет дизайнеру, верстальщику,
                            вебмастеру сгенерировать несколько абзацев более
                            менее осмысленного текста</p>
                        <a href="#" class="text-white rounded-pill border border-white btn-texmart-info ">Читать>></a>
                    </div>
                </div>
            </div>
            <div class="card card-image">
                <img class="card-img-top lazy" data-src="{{ asset('img/blog_4.png') }}" src="" alt="Card image cap">
                <div class="card-body">
                    <p>28.09.19</p>
                    <h4 class="card-title"><a>Какая-то тема</a></h4>
                    <p class="card-text">Сайт рыбатекст поможет дизайнеру,
                        верстальщику, вебмастеру</p>
                    <div class="row justify-content-end">
                        <a href="#" class="text-white btn-texmart">Читать>></a>

                    </div>
                </div>
            </div>
            <div class="card card-image lazy"
                 style="background-image: url({{asset('img/blog_5.png')}});background-repeat: no-repeat;background-size: cover">
                <div class="text-white text-center d-flex align-items-center  py-5 px-4">
                    <div>
                        <h5 class="white-text">28.09.19</h5>
                        <h3 class="card-title pt-2"><strong>Какая-то тема</strong></h3>
                        <p>Сайт рыбатекст поможет дизайнеру, верстальщику,
                            вебмастеру сгенерировать несколько абзацев более
                            менее осмысленного текста</p>
                        <a href="#" class="text-white rounded-pill border border-white btn-texmart-info">Читать>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-3">
        <a href="{{ route('blog_index') }}"><button type="submit"
                class="btn btn-texmart-orange text-white btn-lg px-5 py-2 shadow-lg scale-on-hover "> Все новости>></button></a>
    </div>
</div>
