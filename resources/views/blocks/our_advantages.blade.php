<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-12">
            <h2 class="text-center" style="color: #e99b33 !important;">
                Наши преимущества
            </h2>
        </div>
        <div class="col-sm-11 col-md-6 py-5">


            <div class="row">
                <div class="col-2">

                    <p>
                        <img src="{{ asset('newImages/people.png') }}" alt="">
                    </p>
                    <p>
                        <img src="{{ asset('newImages/cards-star.png') }}" class="my-3" alt="">

                    </p>
                    <p>
                        <img src="{{ asset('newImages/like.png') }}" class="mt-1" alt="">

                    </p>
                    <p>
                        <img src="{{ asset('newImages/think.png') }}" class="my-2" alt="">

                    </p>
                </div>
                <div class="col-8">
                    <p class="text-bold">

                        Новая платформа ориентированная на поиске заказчиков и производителей текстильной и швейной продукции.
                    </p>
                    <p class="text-bold">

                        Рыночный проект от дешевого до качественного, дорогого продукта швейной и текстильной индустрии
                    </p>
                    <p class="text-bold py-3">

                        Технология отслеживания контроля качества продукций
                    </p>
                    <p class="text-bold">

                        Реальные отзывы и рейтинги участников.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 py-5 bg-img">

            {{--<iframe  frameborder="0" allow="></iframe>--}}

            <a class="fancybox-media" href="https://www.youtube.com/watch?time_continue=3&v=xTYkmWnwLvg">
                <img data-src="{{ asset('img/video.png') }}" class="img-fluid lazy h-75 position-relative" alt="">
                <img data-src="{{asset('img/youtube(2).png')}}" class="w-50 youtube lazy position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%) " alt="">
            </a>

        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

@endpush
@push('scripts')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script>
        $(document).ready(function () {
            $('.fancybox-media').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
        });
    </script>
@endpush