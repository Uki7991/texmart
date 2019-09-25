@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <p class="h1">Контроль качества</p>
                    <div class="about-us--block">
                        <div class="about-us--block--image-container">
                            <img class="about-us--image"
                                 src="{{ asset('img/nik-macmillan-YXemfQiPR_E-unsplash (1).jpg') }}" alt="">
                        </div>
                        <p>Качество швейных изделий меняется в зависимости от потребностей общества, которые постоянно
                            изменяются и растут. Уровень качества швейных товаров оценивается комплексными показателями.
                            Качество швейных изделий зависит от качества тканей, качества моделирования,
                            конструирования,
                            технологии пошива. Контроль качества швейных изделий осуществляют, сравнивая изделия с
                            эталонными образцами. Шагая в ногу со временем сотрудники Тексмарт стремятся получить новые
                            знания, проходят обучения в различных тренингах и курсах по повышению квалификаций.
                            Профессионализм и высокая квалификация технологов, модельеров и конструкторов обеспечит
                            выполнение вашего заказа на должном уровне в соответствии с техническим заданием. Основными
                            задачами технического контроля являются: предотвращение выпуска продукции, не
                            соответствующей
                            требованиям технической документации, утвержденным образцам-эталонам.
                        </p>
                        <div>
                        </div>
                    </div>
                    <p>Контроль качества на текстильных фабриках мы разделяем на два вида. “In-line inspection”
                        и
                        “Pre-shipment inspection”
                    </p>
                    <p>“In-line inspection” - это контроль качества на этапе производства продукции, чаще всего,
                        мы
                        осуществляем подобные проверки, когда производство только запущено в серию. Первые
                        единицы
                        одежды уже отшиты но основной объем еще нет. На данном этапе мы проверяем качество
                        закупленного
                        полотна, качество раскроя, швы, фурнитуру, осматриваем внешний вид изделия и проверяем
                        соответствие спецификации. На этом же этапе мы можем спрогнозировать реальные сроки
                        окончания
                        производства и заранее предупредить заказчика о возможной задержке.
                    </p>
                    <div class="about-us--block">
                        <div class="about-us--block--image-container">
                            <img class="about-us--image"
                                 src="{{ asset('img/proverka-kachestva1-300x188.jpg') }}" alt="">
                        </div>
                    <p>У “In-line inspection” есть одно большое преимущество, на этом этапе мы действительно
                        можем
                        исправить “косяки” производителя. С точки зрения заказчика, такая услуга экономически
                        оправдана
                        почти всегда.<br>
                        “Pre-shipment inspection” - это контроль качества перед отгрузкой товара. Как правило, мы
                        проводим подобные инспекции, когда 100% товара уже произведено и 80% товара упаковано. В
                        рамках
                        этой инспекции мы проверяем качество готовой продукции по всем параметрам: качество
                        материала,
                        соответствие цветов, швы, фурнитура, упаковка, маркировка и тд.<br>
                        Благодаря подобным инспекциям наши клиенты получают объективную картину происходящего:
                        фактическое состояние товара, процент и степень брака. Кроме того мы составляем отчеты о
                        проверке товара, на основании которых клиент может принять решение о том, нужно ли
                        отгружать
                        товар или нет.
                    </p>
                    </div>
                    <p>Тексмарт предоставляет возможность заказчику предложить свой вариант проведения контроля
                        качества, которую специалисты Тексмарт выполнить в надлежащем порядке.
                    </p>
                    <p>С Тексмарт Вы сможете проконтролировать процесс изготовления продукции на всех этапах
                        производства. Широкий спектр услуг предоставляемый Тексмарт будет интересен каждому
                        пользователю
                        в зависимости от потребностей и удовлетворения определенных критериев к производимой продукции в соответствии с ее
                        назначением и
                        сфер дальнейшего сбыта продукции. Подробно об услугах Тексмарт можете узнать обратившись
                        к нам
                        по контактам или оставив свой вопрос на сайте.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
