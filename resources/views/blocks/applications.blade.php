<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
            <h2 class="mb-5" style="color:#CD882D; ">Заявки от заказчиков </h2>
            <div class="slider">
                @foreach($announces as $announce)
                    <div class="item_slider">
                        <div class="application_for">
                            <div class="app_content">
                                <div class="app_top">
                                    <a class="text-dark" href="{{ route('announce.show', $announce) }}">
                                        <p class="m-0" title="{{ $announce->content }}">
                                            {{ \Illuminate\Support\Str::limit($announce->content, 150) }}
                                        </p>
                                    </a>
                                </div>
                                <div class="app_bottom">
                                    <div class="app_category">
                                        {{ \Carbon\Carbon::make($announce->created_at)->format('d.m.Y') }}
                                        {{--                                    <p class="application_text m-0">Женская одежда</p>--}}
                                    </div>
                                    {{--                                <div class="app_country">--}}
                                    {{--                                    <img src="{{asset('img/flag.png')}}" alt="Флаг">--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8 mt-5 pt-5 mt-lg-0 pt-lg-0">
            <h2 class="mb-5 text-center" style="color:#CD882D; ">Объявления</h2>

            <div class="card-deck">
                <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                    <a href="{{ route('production', ['type' => 'productions']) }}">
                        <div class="div-lazy card-image"
                             style="background-image: url({{asset('img/production.png')}});background-repeat: no-repeat;background-size: cover;height: 350px;">
                            <div class="text-white text-center row align-items-end px-4  pt-5 pb-4" style="height: 100%">
                                <h4 class="card-title text-center text-white"><strong>Производственные цеха и
                                        фабрики</strong></h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                    <a href="{{ route('production', ['type' => 'product']) }}">
                        <div class="div-lazy card-image"
                             style="background-image: url({{asset('img/goods.png')}});background-repeat: no-repeat;background-size: cover;height: 350px;">
                            <div class="text-white justify-content-center row align-items-end  py-5 px-4"
                                 style="height: 100%">
                                <div>
                                    <h3 class="card-title text-white"><strong>Товары</strong></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                    <a href="{{ route('production', ['type' => 'service']) }}">
                        <div class="div-lazy card-image"
                             style="background-image: url({{asset('img/service.png')}});background-repeat: no-repeat;background-size: cover;height: 350px;">
                            <div class="text-white  row align-items-end justify-content-center py-5 px-4"
                                 style="height: 100%">
                                <div class="">
                                    <h3 class="card-title text-white"><strong>Услуги</strong></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
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
                verticalSwiping: false,
            });

        });
    </script>
@endpush
