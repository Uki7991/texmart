<div class="container py-5">
    <h2 class="mb-5" style="color:#CD882D ">Заявки от заказчиков </h2>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-4 slider">
            @foreach($announces as $announce)
                <div class="item_slider">
                    <div class="application_for">
                        <div class="app_content">
                            <div class="app_top">
                                <p class="m-0" title="{{ $announce->content }}">
                                    {{ \Illuminate\Support\Str::limit($announce->content, 150) }}
                                </p>
                            </div>
                            <div class="app_bottom">
                                <div class="app_category">
                                    <p class="application_text m-0">Женская одежда</p>
                                </div>
                                <div class="app_country">
                                    <img src="{{asset('img/flag.png')}}" alt="Флаг">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 col-md-12 col-lg-8 mt-5 pt-5 mt-lg-0 pt-lg-0">
            <div class="card-deck">
                <a href="{{ route('consulting') }}" class="card mb-4 mt-5 mt-sm-0" style="margin-right: 0;">
                    <div class="view overlay">
                        <img class="card-img-top div-lazy" data-src="{{ asset('img/consulting_texmart.png') }}" src=""
                             alt="Card image cap">
                    </div>
                    <div class="">
                        <div class="h5 text-white position-absolute text-center w-75 bg-texmart-service py-2 m-0 "
                           style="bottom: 10%;">Консультация</div>
                    </div>
                </a>
                <a href="{{ route('logistics') }}" class="card mb-4" style="margin-right: 0;">
                    <div class="view overlay">
                        <img class="card-img-top div-lazy" data-src="{{ asset('img/logistik_texmart.png') }}" src=""
                             alt="Card image cap">
                    </div>
                    <div class="">
                        <p class="h5 text-white position-absolute text-center w-75 bg-texmart-service  py-2 m-0"
                           style="bottom: 10%;">Логистика</p>
                    </div>
                </a>
                <a href="{{ route('quality') }}" class="card mb-4" style="margin-right: 0;">
                    <div class="view overlay">
                        <img class="card-img-top div-lazy" data-src="{{ asset('img/quality_texmart.png') }}" src=""
                             alt="Card image cap">
                    </div>
                    <div class="">
                        <p class="h5 text-white position-absolute text-center w-75 bg-texmart-service  py-2 m-0"
                           style="bottom: 10%;">Проверка качества</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@push('styles')

@endpush
@push('scripts')
    <script>
        $(document).ready(function () {
            // slick carousel
            $('.slider').slick({
                vertical: true,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
                touchmove: false,
                swipeToSlide: false,
                touchThreshold: false,
                draggable: false,
                verticalSwiping: true,
            });

        });
    </script>
@endpush
