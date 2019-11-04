<div class="container-fluid position-relative mt-5 mt-xl-0 vh-100" style="overflow:hidden;">
    <div class="row pl-xl-5" style="left: 0; top: 0;">
        <div class="col-12 position-absolute p-0">
            {{--new carousel but this carousel is slick.js carouse--}}
            <div class="" id="background-carousel" style="z-index: 0;">
                <img src="{{ asset('img/main.png') }}" class="" alt="">
                <img src="{{ asset('img/main.png') }}" class="" alt="">
                <img src="{{ asset('img/main.png') }}" class="" alt="">
            </div>
            {{--end carousel--}}
        </div>
        <div class="col-12 pl-5 col-lg-6 position-relative min-vh-100">
            <div class="backdrop h-100"></div>
            <div class="row h-100 position-relative">
                <div class="col-12">
                    <div class="pt-4 mb-5 position-relative text-left pl-5 ">
                        <img src="{{asset('img/logo3.png')}}" class="img-fluid" alt="logo">
                    </div>
                </div>
                {{--owl carousel for text--}}
                <div class="col-12 pl-5">
                    <div class="text-left">
                        <div id="owl-text" class="owl-carousel owl-theme">
                            <div class="item text-white">
                                <p class="h3">Первая интернерт платформа швейной и <br>текстильной промышленности Кыргызстана</p>
                            </div>
                            <div class="item text-white">
                                <p class="h3">Консалтинг,оформление всех<br> бухлагтерских и юридических документов</p>
                            </div>
                            <div class="item text-white">
                                <p class="h3">Оценка качества пошива одежды и<br> производтсва от Texmart.kg для<br> уверенности на растоянии </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--end carousel--}}
                {{-- button for create new advertisement--}}
                <div class="add_announcement col-12 position-relative text-left pl-5">
                    <a href="" class="text-white" style="border-radius: 10px;border:1px solid #d0d7dd; padding:8px 30px;">Добавить объявление</a>
                </div>

                <div class="col-12 pl-5 position-relative mt-5">
                    <ul class="list-inline text-light">
                        <li class="list-inline-item text-center">
                            <h4 class="mx-5 folder-sprite waves-effect waves-light "></h4>
                            <p>
                                Единая база <br> производителей
                            </p>
                        </li>
                        <li class="list-inline-item text-center">
                            <h4 class="mx-5 mb-4 medal-sprite waves-effect waves-light"></h4>
                            <p class="pb-3">Оценка качества</p>
                        </li>
                        <li class="list-inline-item text-center">
                            <h4 class="mx-5 cloth-sprite waves-effect waves-light"></h4>
                            <p>
                                Поставка тканей <br>
                                и фурнитуры
                            </p>
                        </li>
                    </ul>
                    <ul class="list-inline text-light">
                        <li class="list-inline-item text-center">
                            <h4 class="mx-5 production-sprite waves-effect waves-light"></h4>
                            <p>
                                Производство <br> одежды  в КР
                            </p>
                        </li>
                        <li class="list-inline-item text-center">
                            <h4 class="mxmx-5 -3 box-sprite waves-effect waves-light"></h4>
                            <p>
                                Доставка
                            </p>
                        </li>
                        <li class="list-inline-item text-center">
                            <h4 class="mx-5 document-sprite waves-effect waves-light"></h4>
                            <p>
                                Оформление <br>
                                документов
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('https://raw.githubusercontent.com/daneden/animate.css/master/animate.css') }}">
@endpush
@push('scripts')
    <script>
        $('#owl-text').owlCarousel({
            items: 1,
            loop: false,
            margin: 10,
            mouseDrag: false,
            touchDrag: true,
            autoplay: true,
            autoplayTimeout: 3000,
            dots:true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });
        $('#background-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    </script>
@endpush
