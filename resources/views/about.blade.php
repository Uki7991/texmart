@extends('layouts.app')
@section('content')
    <section class="bg-about">
        <div class="container h-100">
            <div class="row align-items-end h-100">
                <div class="h1 text-white">
                    ЧТО ТАКОЕ TEXMART.KG?
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 font-weight-bold text-dark">
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                    <p>Мы первая интернет платформа производителей
                        текстильной<br> и швейной продукции Кыргызской Республики.
                        Ведение бизнеса в формате В2В.</p>
                </div>
                <div class="col-5">
                    <img src="{{asset('img/about_1.png')}}" class="img-fluid" alt="">
                </div>

            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                    <img src="{{ asset('img/about_2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-5">
                    <p>Мы знаем Ваши потребности и можем удовлетворить их, знаем как помочь
                        Вам в решении Ваших каждодневных проблем - поиска производителей
                        и заказчиков швейной и текстильной продукций и изделий.</p>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-11 grey lighten-4 rounded p-5">
                    <p>Не всегда поиски на разных сайтах, форумах дают положительный результат, зачастую это
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
                <div class="col-3">
                    <img src="{{ asset('img/about_3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-7">
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
                <div class="col-10">
                    <ul class="font-weight-normal">
                        <li>самое выгодное предложение для вашего бизнеса;</li>
                        <li>единая база предприятий легкой промышленности,
                            более 5000 производителей швейной и текстильной продукции Кыргызской Республики;
                        </li>
                        <li>подробную информацию о каждом производителе;</li>
                        <li>производительная мощность, количество сотрудников, марки и модели оборудований на
                            котором они работают и многое другое;
                        </li>
                        <li>контакты и фактическое местоположение на карте.
                            вам откроется возможность напрямую связаться с каждым
                            производителем минуя всех возможных посредников;
                        </li>
                        <li>рейтинг и оценка деятельности каждого производителя
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
                <div class="col-10">
                    <ul class="font-weight-normal">
                        <li>разместить заказы и запустить в производство;</li>
                        <li>независимая оценка текстильных и швейных предприятий;</li>
                        <li>оценка и инспекция качества продукции на всех этапах
                            производства по международным стандартам;
                        </li>
                        <li>помощь и услуги экспорта-импорта, официальные поставки текстильной и швейной продукции</li>
                        <li>ведение налогового и финансового учета, консультации по этим вопросам;</li>
                        <li>юридические услуги;</li>
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
                <div class="col-10">
                    <ul class="font-weight-normal">
                        <li>поиск, подбор, заключение контракта, выкуп и прямые поставки тканей, фурнитуры и
                            оборудования из КНР
                            с заводов и фабрик производителей;
                        </li>
                        <li>разработка моделей швейной продукции;</li>
                        <li>платное размещение объявлений со статусом “VIP”;</li>
                        <li>упаковка и отправка швейной продукции, а также многое другое.</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center my-1">
                <div class="col-11  p-4">
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
