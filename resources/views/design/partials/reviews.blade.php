<div class="container py-5">
    <div class="row">
        <div class="col-12 py-5">
            <h2 class="h1 texmart-text-primary text-center">Отзывы</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="row" id="reviews-carousel">
                @for($i = 0; $i < 4; $i++)
                    <div class="col-12 col-lg-10">
                        <div class="card shadow-none border-0 mb-3">
                            <div class="row align-items-center justify-content-center no-gutters">
                                <div class="col-md-4 col-8">
                                    <img src="{{ asset('design/quote_img.png') }}" class="card-img rounded-0" alt="...">
                                </div>
                                <div class="col-md-8 col-12 px-0 px-md-5">
                                    <div class="card-body text-dark position-relative h-100">
                                        <p class="card-text pb-0 pb-md-2">
                                            <img src="{{ asset('design/quote.png') }}" alt="">
                                        </p>
                                        <p class="card-title my-2 my-md-4 text-muted">
                                            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы
                                        </p>
                                        <p class="card-text text-dark pt-0 pt-md-2 font-weight-bolder">Аида, директор швейного цеха Заря</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
