<div class="container-fluid position-relative mt-5 mt-xl-0" style="overflow:hidden;">
    <div class="row pl-xl-5" style="background-image:  url({{ asset('img/main.png') }});background-repeat: no-repeat;background-size: cover; left: 0; top: 0;">
        <div class="col-12 pl-lg-5 col-lg-6 position-relative min-vh-100" >
            <div class="backdrop h-100"></div>
            <div class="row h-100 position-relative">
                <div class="col-12">
                    <div class="pt-4 mb-5 position-relative text-left pl-lg-5">
                        <img src="{{ asset('img/logo3.png') }}" class="img-fluid" alt="logo">
                    </div>
                </div>
                {{--owl carousel for text--}}
                <div class="col-12 pl-lg-5">
                    <div class="text-left">
                        <div id="owl-text" class="owl-carousel owl-theme">
                            <div class="item text-white">
                                <p class="h3">Первая интернерт платформа швейной и текстильной промышленности Кыргызстана</p>
                            </div>
                            <div class="item text-white">
                                <p class="h3">Консалтинг,оформление всех бухгалтерских и юридических документов</p>
                            </div>
                            <div class="item text-white">
                                <p class="h3">Оценка качества пошива одежды и производтсва от Texmart.kg для уверенности на расстоянии </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--end carousel--}}
                {{-- button for create new advertisement--}}
                <div class="add_announcement col-12 row position-relative text-left pl-lg-5 pt-3">
                    <div class="col-12 col-xl-6 mb-3 mb-xl-0">
                        <a href="http://texmart/profile/production?type=productions" class="text-white small" style="border-radius: 10px;border:1px solid #d0d7dd; padding:8px 30px;">Добавить объявление</a>
                    </div>
                    <div class="col-12 col-xl-6">
                        <a href="#form-review" class="text-white btn-sm btn-texmart-orange" style="border-radius: 10px;padding:9px 32px;">Предложить заказ</a>
                    </div>
                </div>
                <div class="row justify-content-center position-relative mt-5">
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto folder-sprite waves-effect waves-light "></h4>
                        <p>
                            Единая база производителей
                        </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto medal-sprite waves-effect waves-light"></h4>
                        <p class="pb-3">
                            Оценка качества
                        </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto cloth-sprite waves-effect waves-light"></h4>
                        <p>
                            Поставка тканей
                            и фурнитуры
                        </p>
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto production-sprite waves-effect waves-light"></h4>
                        <p>
                            Производство  одежды  в КР
                        </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto -3 box-sprite waves-effect waves-light"></h4>
                        <p>
                            Доставка
                        </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 text-center text-white">
                        <h4 class="mx-auto document-sprite waves-effect waves-light"></h4>
                        <p>
                            Оформление
                            документов
                        </p>
                    </div>
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
            loop: true,
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
