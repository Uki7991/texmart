<div class="container mt-5">
    <h2 class="text-center" style="color: #e99b33 !important;padding-bottom: 25px">
        Объявления
    </h2>
    <div class="row" style="padding-left: 40px">
        <div class="row col-12">
            <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                <div class="div-lazy card-image"
                     style="background-image: url({{asset('img/production.png')}});background-repeat: no-repeat;background-size: cover;height: 402px;border-radius: 10px">
                    <div class="text-white text-center row align-items-end px-4  pt-5 pb-4" style="height: 100%">
                        <a href="{{ route('production', ['type' => 'productions']) }}"><h3 class="card-title text-center text-white"><strong>Производственные цеха и
                                    фабрики</strong></h3></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                <div class="div-lazy card-image"
                     style="background-image: url({{asset('img/goods.png')}});background-repeat: no-repeat;background-size: cover;height: 402px;border-radius: 10px">
                    <div class="text-white justify-content-center row align-items-end  py-5 px-4" style="height: 100%">
                        <div>
                            <a href="{{ route('production', ['type' => 'product']) }}"><h3 class="card-title text-white"><strong>Товары</strong></h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto my-4 my-md-2">
                <div class="div-lazy card-image"
                     style="background-image: url({{asset('img/service.png')}});background-repeat: no-repeat;background-size: cover;height: 402px;border-radius: 10px">
                    <div class="text-white  row align-items-end justify-content-center py-5 px-4" style="height: 100%">
                        <div class="">
                            <a href="{{ route('production', ['type' => 'service']) }}"><h3 class="card-title text-white"><strong>Услуги</strong></h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
