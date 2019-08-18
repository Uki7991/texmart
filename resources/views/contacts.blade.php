@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Контакты</h1>
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A95d8395382f6f742cb4d5dca4a8aa599cc96f478858d19aa2106e15d67bd6cd0&amp;source=constructor"
                    width="700" height="400" frameborder="0">
                </iframe>
                <div class="info-contacts col-md-4">
                    <p>Офис компании Texmart.kg находится в г. Бишкек. Texmart.kg является информационным порталом,
                        объединяющий текстильную промышленность Кыргызстана.
                        На этом портале Вы найдете долгосрочного партнера в швейно-текстильной сфере!
                        <br>
                    </p>

                    <div class="col-12 d-flex mb-3">
                            <i class="fas fa-phone p-1"></i>
                            <p class="m-0 p-0 ml-2">+996 508 900 500</p>
                    </div>
                    <div class="col-12 d-flex mb-3">
                            <i class="fas fa-map-marker-alt p-1"></i>
                            <p class="m-0 p-0 ml-2">Кыргызстан, г. Бишкек, ул. Тоголока Молдо 104</p>
                    </div>
                    <div class="col-12 d-flex mb-3">
                            <i class="fas fa-envelope p-1"></i>
                            <p class="m-0 p-0 ml-2">support@texmart.kg</p>
                    </div>
                    <div class="col-12 d-flex mb-3">
                            <i class="fas fa-clock p-1"></i>
                            <div>
                                <p class="m-0 p-0 ml-2 font-weight-bold">Режим работы</p>
                                <p class="m-0 p-0 ml-2 text-muted">12:00 - 18:00</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
