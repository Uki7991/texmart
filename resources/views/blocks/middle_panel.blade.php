<div class="container-fluid bg-img-header">
    <div class="row">
        <div class="col-6 bg-text-header">
            <div class="pt-4 mb-5 text-center">
                <img src="{{asset('img/logo 3.png')}}" class="img-fluid" alt="logo">
            </div>
            <div class="text-center">
                <div class="owl-carousel owl-theme">
                    <div class="item text-white">
                        <p>Первая интернерт платформа швейной и <br>текстильной промышленности Кыргызстана</p>
                    </div>
                    <div class="item text-white">
                        <p>Консалтинг,оформление всех<br> бухлагтерских и юридических документов</p>
                    </div>
                    <div class="item text-white">
                        <p>Оценка качества пошива одежды и<br> производтсва от Texmart.kg для<br> уверенности на растоянии </p>
                    </div>
                </div>
            </div>
            <div class="add_announcement">
                <a href="">Добавить объявление</a>
            </div>
            <div class="text-center mt-5">
                <ul class="list-inline text-light">
                    <li class="list-inline-item">
                        <h4 class="mx-5 folder-sprite waves-effect waves-light "></h4>
                        Единая база <br> производителей
                    </li>
                    <li class="list-inline-item">
                        <h4 class="mx-5 mb-4 medal-sprite waves-effect waves-light"></h4>
                        <span class="pb-3">Оценка качества</span>
                    </li>
                    <li class="list-inline-item">
                        <h4 class="mx-5 cloth-sprite waves-effect waves-light"></h4>
                        Поставка тканей <br>
                        и фурнитуры
                    </li>
                </ul>
                <ul class="list-inline text-light">
                    <li class="list-inline-item">
                        <h4 class="mx-5 production-sprite waves-effect waves-light"></h4>
                        Производство <br> одежды  в КР
                    </li>
                    <li class="list-inline-item">
                        <h4 class="mxmx-5 -3 box-sprite waves-effect waves-light"></h4>
                        Доставка
                    </li>
                    <li class="list-inline-item">
                        <h4 class="mx-5 document-sprite waves-effect waves-light"></h4>
                        Оформление <br>
                        документов
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            mouseDrag: false,
            touchDrag: true,
            autoplay: true,
            autoplayTimeout: 3000,

        })
    </script>
@endpush
