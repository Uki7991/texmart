<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h2 class="text-center" style="color: #e99b33 !important;">
                Наши преимущества
            </h2>
        </div>
        <div class="col-sm-11 col-lg-6 py-5">
            <div class="media mt-4 align-items-center px-1 text-md-left">
                <div class="sprite-community div-lazy mr-3" alt="Generic placeholder image"></div>
                <div class="media-body h5">
                    Новая платформа ориентированная на поиске заказчиков и производителей текстильной и швейной продукции.
                </div>
            </div>
            <div class="media mt-4 align-items-center px-1 text-md-left">
                <div class="sprite-cardStar div-lazy mr-3" alt="Generic placeholder image"></div>
                <div class="media-body h5">

                    Рыночный проект от дешевого до качественного, дорогого продукта швейной и текстильной индустрии
                </div>
            </div>
            <div class="media mt-4 align-items-center px-1 text-md-left">
                <div class="sprite-like div-lazy mr-3" alt="Generic placeholder image"></div>
                <div class="media-body h5">

                    Технология отслеживания контроля качества продукций
                </div>
            </div><div class="media mt-4 align-items-center px-1 text-md-left">
                <div class="sprite-disOrLike div-lazy mr-3" alt="Generic placeholder image"></div>
                <div class="media-body h5">

                    Реальные отзывы и рейтинги участников.
                </div>
            </div>


        </div>
        <div class="col-12 col-md-9 col-lg-6 py-5 bg-img">

            {{--<iframe  frameborder="0" allow="></iframe>--}}

            <a class="fancybox-media" href="https://www.youtube.com/watch?time_continue=3&v=xTYkmWnwLvg">
                <div class="position-relative">
                    <img src="" data-src="{{ asset('img/video.png') }}" class="img-fluid div-lazy w-100 position-relative" alt="">
                    <img src="" data-src="{{asset('img/youtube(2).png')}}" class="youtube div-lazy  position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); " alt="">
                </div>
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
