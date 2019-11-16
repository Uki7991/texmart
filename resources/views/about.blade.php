@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="bg-about mt-xl-5">
        <div class="container h-100">
            <div class="row align-items-end h-100">
                <div class="h1 text-white pb-5 text_for_info text-center">
                    ЧТО ТАКОЕ TEXMART.KG?
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 text-dark">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-8 pb-3 d-lg-none d-block">
                    <img src="{{asset('img/about_1.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <p class="text-for-about">Мы первая интернет платформа производителей
                        текстильной<br> и швейной продукции Кыргызской Республики.
                        Ведение бизнеса в формате В2В.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{asset('img/about_1.png')}}" class="img-fluid" alt="">
                </div>

            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <img src="{{ asset('img/about_2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 py-3 py-lg-0">
                    <p class="text-for-about">Мы знаем Ваши потребности и можем удовлетворить их, знаем как помочь
                        Вам в решении Ваших каждодневных проблем - поиска производителей
                        и заказчиков швейной и текстильной продукций и изделий.</p>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-11 grey lighten-4 rounded p-5">
                    <p class="text-for-about">Не всегда поиски на разных сайтах, форумах дают положительный результат, зачастую это
                        оборачивается пустой тратой времени и ресурсов как трудовых так и финансовых, которое
                        Вы могли бы использовать для улучшения и развития Вашей компании. Наш коллектив
                        достаточно долгое время проработал в сферах производства, логистики, финансов и
                        бухгалтерского учета в швейной промышленности, ежедневно сталкиваясь с проблемами
                        производства, поставки, закупки-заказа, сбыта текстильной и швейной продукций. Для
                        решения имеющихся трудностей и проблем в данной сфере Наша команда пришла к выводу,
                        что объединив предприятия швейной и текстильной промышленности на платформе Texmart.kg
                        и предлагая услуги компании Texmart Мы облегчим ведение международного бизнеса в ЕАЭС
                        и сможем преодолеть бюрократические барьеры, придавая бизнесу оперативность и
                        эффективность капиталовложений пользователей платформы.</p>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-md-5 col-lg-3">
                    <img src="{{ asset('img/about_3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-7 text-for-about">
                    <p>Платформа Texmart.kg предоставит вам возможность узнать подробно о всех производителях швейной и
                        текстильной продукции Кыргызской Республики.</p>
                    <p>Вам будет доступна детальная информация о каждом производителе, которую наши специалисты
                        оценивают и дают реальные отзывы об их деятельности и об их возможностях. Вы будете иметь полное
                        представление что из себя представляет тот или иной производитель. Вам будет доступны отзывы и
                        оценки заказчиков.</p>
                </div>
            </div>

            <div class="row mt-5 mb-4">
                <div class="col-12 text-center">
                    <h2 class="font-weight-bold">Что вы получите пользуясь Texmart.kg?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-for-about">
                    <ul class="font-weight-normal">
                        <li class="pb-4 pb-md-1 pb-lg-0">самое выгодное предложение для вашего бизнеса;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">единая база предприятий легкой промышленности,
                            более 5000 производителей швейной и текстильной продукции Кыргызской Республики;
                        </li>
                        <li class="pb-4 pb-md-1 pb-lg-0">подробную информацию о каждом производителе;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">производительная мощность, количество сотрудников, марки и модели оборудований на
                            котором они работают и многое другое;
                        </li>
                        <li class="pb-4 pb-md-1 pb-lg-0">контакты и фактическое местоположение на карте.
                            вам откроется возможность напрямую связаться с каждым
                            производителем минуя всех возможных посредников;
                        </li>
                        <li class="pb-4 pb-md-1 pb-lg-0">рейтинг и оценка деятельности каждого производителя
                            или предприятия предоставляющего услуги для швейной и текстильной промышленности;
                        </li>
                        <li>бесплатная онлайн консультация.</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5 mb-4">
                <div class="col-12 text-center">
                    <h2 class="font-weight-bold">Мы можем сделать за вас:</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-for-about">
                    <ul class="font-weight-normal ">
                        <li class="pb-4 pb-md-1 pb-lg-0">разместить заказы и запустить в производство;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">независимая оценка текстильных и швейных предприятий;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">оценка и инспекция качества продукции на всех этапах
                            производства по международным стандартам;
                        </li>
                        <li class="pb-4 pb-md-1 pb-lg-0">помощь и услуги экспорта-импорта, официальные поставки текстильной и швейной продукции</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">ведение налогового и финансового учета, консультации по этим вопросам;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">юридические услуги;</li>
                        <li>сертификация продукции и многое другое.</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5 mb-4">
                <div class="col-12 text-center">
                    <h2 class="font-weight-bold">Также у нас:</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-for-about">
                    <ul class="font-weight-normal">
                        <li class="pb-4 pb-md-1 pb-lg-0">поиск, подбор, заключение контракта, выкуп и прямые поставки тканей, фурнитуры и
                            оборудования из КНР
                            с заводов и фабрик производителей;
                        </li>
                        <li class="pb-4 pb-md-1 pb-lg-0">разработка моделей швейной продукции;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">платное размещение объявлений со статусом “VIP”;</li>
                        <li class="pb-4 pb-md-1 pb-lg-0">упаковка и отправка швейной продукции, а также многое другое.</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center my-1">
                <div class="col-11  p-4 text-for-about">
                    Texmart.kg каждый день развивается и дополняются возможности для облегчения и ведения вашего
                    бизнеса.
                    Открываются новые уровни для стабильного роста и приумножения капитала каждого предпринимателя
                    пользующегося платформой. Учитывая Ваши интересы и потребности наш коллектив готов решать
                    стандартные
                    и нестандартные задачи.
                </div>
            </div>
        </div>
    </section>
@endsection
