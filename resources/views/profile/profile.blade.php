@extends('profile.dashboard')

@section('profile_content')
    <section class="text-center blog-components">
        <h3 class="section-heading mb-5 h1">Объявления заказчиков</h3>
        <section class="my-5">
            @foreach($announces as $announce)
                <div class="media mt-4 px-1 text-md-left">
                    <a title="{{ $announce->title }}" href="{{ route('announce.show', $announce) }}" class="media-body text-dark hoverable rounded-circle">
                        <div class="application_for">
                            <div class="app_content">
                                <div class="app_top" style="display: flex;flex-wrap: nowrap;justify-content: space-between;">
                                    <p class="" title="{{ $announce->content }}" style="margin: 0em 0">{{ \Illuminate\Support\Str::limit($announce->content, 50) }}</p>
                                    <div class="">{{ \Carbon\Carbon::make($announce->created_at)->format('d.m.Y') }}</div>
                                </div>
                                <div class="app_bottom">
                                    <div class="app_category">
                                        <p class="application_text" style="margin: 0em 0">Женская одежда</p>
                                    </div>
                                    <div class="app_country">
                                        <img src="{{asset('img/flag.png')}}" alt="Флаг">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

                @if($announces instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row pl-4 ml-0 pt-3">
                        {{ $announces->appends(request()->query())->links() }}
                    </div>
                @endif
        </section>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
@endpush
@push('scripts')

    @if(false)
        <script>
            let intro = introJs();
            intro.setOptions({
                prevLabel:"Назад",
                nextLabel:"Вперед",
                skipLabel:"Пропустить",
                doneLabel:"Готово",
                showProgress:true,
                steps: [
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step1',
                        intro: "Добро пожаловать в профиль, в раздел ленты "
                    },
                    {
                        element: '.blog-components',
                        intro: "Здесь вы можете просматривать топ 10 объявлений от закзачиков!",
                    },
                    {
                        element: '.step3',
                        intro: 'На этом графике вы можете просматривать статистику показов ваших объявлений',
                        position: "left"
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step4',
                        intro: "Нажмите на кнопку подать объявления",
                        disableInteraction:false
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step5',
                        intro: 'Три вида объявлений:'
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step6',
                        intro: 'Здесь вы можете просмотреть и создать объявления по категории производственных цехов и фабрик'
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step7',
                        intro: 'Здесь вы можете просмотреть и создать объявления по категории товаров'
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step8',
                        intro: 'Здесь вы можете просмотреть и создать объявления по категории услуги'
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step9',
                        intro: 'Здесь вы можете настроить свой аккаунт'
                    },
                    {
                        element: '.col-12.col-lg-3.d-none.d-lg-block .step10',
                        intro: 'Нажав на кнопку выход,вы можете выйти из своего профиля'
                    },
                ]
            });
            intro.start();
            introJs().onexit(function() {
                alert("exit of introduction");
            });

            $('.step4').one('click',function (e) {
                intro.goToStep(4).start();
            });

            intro.onbeforechange(function(targetElement) {
                if ($('.step5')[1] == $(targetElement)[0]) {
                    $('.col-12.col-lg-3.d-none.d-lg-block .step4').trigger("click")
                }
            });
        </script>
    @endif
@endpush
