@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <h3>Что такое Texmart.kg?</h3>
                    <p>Тексмарт.кг это первая интернет платформа производителей текстильной и швейной продукции Кыргызской Республики.
                        Ведение бизнеса в формате В2В.</p>
                    <p>Раздел “О нас” это на самом деле не о нас, а о Вас любимых желанных, лояльных, капризных, щедрых, экономных клиентах.
                        Здесь мы расскажем о Вас и о Ваших интересах и это является нашей целью, целью сделать Ваш бизнес выгодным,
                        прибыльным и динамично растущем на рынке.</p>
                    <p>
                        Мы знаем Ваши потребности и можем удовлетворить их, знаем как помочь Вам в решении
                        Ваших каждодневных проблем - поиска производителей и заказчиков швейной и текстильной продукций и изделий.
                    </p>
                    <div class="about-us--block">
                      <div class="about-us--block--image-container">
                        <img class="about-us--image" src="{{ asset('img/kolsunting.jpg') }}" alt="">
                      </div>
                      <p>
                        Не всегда поиски на разных сайтах, форумах дают положительный результат, зачастую это оборачивается пустой тратой времени
                          и ресурсов как трудовых так и финансовых, которую Вы могли бы использовать  для улучшения и развития Вашей компании.
                          Наш коллектив, достаточно долгое время проработав в сферах производства, логистики, финансов и бухгалтерского учета
                          в швейной промышленности и ежедневно сталкивались с проблемами производства, поставки, закупки-заказа, сбыта текстильной
                          и швейной продукций. Для решения имеющихся трудностей и проблем в данной сфере Наша команда пришла к выводу что
                          объединив предприятия швейной и текстильной промышленности на платформе Тескмарт.кг и предлагая услуги компании
                          Texmart.kg Мы облегчим ведение международного бизнеса в ЕАЭС и сможем преодолеть бюрократические барьеры придавая
                          бизнесу оперативность и эффективность капиталовложений пользователей платформы.
                      </p>
                    </div>

                    <p>Платформа Texmart.kg предоставит вам возможность узнать подробно о всех производителях швейной и текстильной
                        продукции Кыргызской Республики.</p>
                    <p>Вам будет доступна детальная информация о каждам производителе, которую наши специалисты оценивают и дают реальные
                        отзывы об их деятельности и об их возможностях. Вы будете иметь полное представление что из себя представляет тот или
                        иной производитель. Вам будет доступны отзывы и оценки заказчиков. </p>
                    <h4>Что вы получите пользуясь Texmart.kg?</h4>
                    <div class="about-us--block-right">
                        <div class="about-us--block--image-container-right">
                            <img class="about-us--image" src="{{ asset('img/volha-flaxeco-omgRZCmTvUM-unsplash.jpg') }}" alt="">
                        </div>
                        <ul>
                            <li>самое выгодное предложение для вашего бизнеса;</li>
                            <li>единая база предприятий легкой промышленности,<br> более 5000 производителей швейной и текстильной продукции Кыргызской
                                Республики;</li>
                            <li>подробную информацию о каждом производителе; <br>производительная мощность, количество сотрудников, марки и модели
                                оборудований на <br> котором они работают и многое другое;</li>
                            <li>контакты и фактическое местоположение на карте. <br>вам откроется возможность напрямую связаться с каждым <br> производителем минуя всех возможных посредников;</li>
                            <li>рейтинг и оценка деятельности каждого производителя <br> или предприятия предоставляющего услуги для швейной и
                                текстильной промышленности;</li>
                            <li>бесплатная онлайн консультация.</li>
                        </ul>
                    </div>
                    <h4>Мы можем сделать за вас:</h4>
                    <div class="about-us--block">
                        <div class="about-us--block--image-container">
                            <img class="about-us--image" src="{{ asset('img/ashim-d-silva-ZmgJiztRHXE-unsplash.jpg') }}" alt="">
                        </div>
                        <ul>
                            <li>разместить заказы и запустить в производство;</li>
                            <li>независимая оценка текстильных и швейных предприятий;</li>
                            <li>оценка и инспекция качества продукции на всех этапах <br> производства по международным стандартам;</li>
                            <li>помощь и услуги экспорта-импорта, официальные поставки текстильной и швейной продукции;</li>
                            <li>ведение налогового и финансового учета, консультации по этим вопросам;</li>
                            <li>юридические услуги;</li>
                            <li>сертификация продукции и многое другое.</li>
                        </ul>
                    </div>
                    <h4>Также у нас:</h4>
                    <div class="about-us--block-right">
                        <div class="about-us--block--image-container-right">
                            <img class="about-us--image" src="{{ asset('img/kenny-luo-xyC3Bx8FXnI-unsplash.jpg') }}" alt="">
                        </div>
                        <ul>
                            <li>поиск, подбор, заключение контракта, выкуп и прямые  поставки тканей, фурнитуры и оборудования из КНР <br> с заводов и фабрик производителей;</li>
                            <li>разработка моделей швейной продукции;</li>
                            <li>платное размещение объявлений со статусом “VIP”;</li>
                            <li>упаковка и отправка швейной продукции, а также многое другое.</li>
                        </ul>
                    </div>

                    <p>Texmart.kg каждый день развивается и дополняются возможности для облегчения и ведения вашего бизнеса.
                        Открываются новые уровни для стабильного роста и приумножения капитала каждого предпринимателя пользующегося
                        платформой. Учитывая Ваши интересы и потребности наш коллектив готов решать стандартные и нестандартные задачи.</p>
                    <h5 class="text-lg-center"><strong>Откройте новые возможности с Texmart.kg</strong></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
