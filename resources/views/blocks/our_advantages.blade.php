<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center" style="color: #e99b33 !important;">
                Наши преимущества
            </h2>
        </div>
        <div class="col-sm-11 col-md-6 py-5">


            <div class="row">
                <div class="col-2">

                    <p class="mb-1 mb-md-3">
                        <img src="{{ asset('newImages/people.png') }}" id="preim" alt="">
                    </p>
                    <p class="mb-1 mb-md-3 mb-xl-3">
                        <img src="{{ asset('newImages/cards-star.png') }}" id="preim" class="my-1 my-md-2" alt="">

                    </p>
                    <p class="mb-1 mb-md-3">
                        <img src="{{ asset('newImages/like.png') }}" id="preim" class="mt-1 mt-md-0" alt="">

                    </p>
                    <p class="mb-1 mb-md-3">
                        <img src="{{ asset('newImages/think.png') }}" id="preim" class="my-2 my-md-0" alt="">

                    </p>
                </div>
                <div class="col-8">
                    <p class="text-bold pt-1 pt-md-0 mar-micro-mob">

                        Новая платформа ориентированная на поиске заказчиков и производителей текстильной и швейной продукции.
                    </p>
                    <p class="text-bold pt-2 pt-md-2 pt-xl-0 mar-micro-mob">

                        Рыночный проект от дешевого до качественного, дорогого продукта швейной и текстильной индустрии
                    </p>
                    <p class="text-bold  pt-1 pt-md-0 py-md-2 py-xl-2 pad-micro-mob ">

                        Технология отслеживания контроля качества продукций
                    </p>
                    <p class="text-bold pt-2 pad-micro-mob ">

                        Реальные отзывы и рейтинги участников.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 py-5 bg-img">

            {{--<iframe  frameborder="0" allow="></iframe>--}}

            <a class="fancybox-media position-relative" href="https://www.youtube.com/watch?time_continue=3&v=xTYkmWnwLvg">
                <img src="{{ asset('img/video.png') }}" class="img-fluid   position-relative" alt="">
                <img src="{{asset('img/youtube(2).png')}}" class="youtube  position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); " alt="">
            </a>

        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script>
            $('.fancybox-media').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
    </script>
@endpush
