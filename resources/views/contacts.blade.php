@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <img id="image" class="w-100" src="{{ asset('img/898714.jpg') }}">
                </div>
            </div>
        </div>
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
                                <p class="m-0 p-0 ml-2 text-muted">9:00 - 18:00</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/cropper.min.js') }}"></script>
{{--    <script src="{{ asset('js/jquery-cropper.js') }}"></script>--}}
    <script>
        var image = $('#image');

        image.cropper({
            aspectRatio: 16 / 9,
            crop: function(event) {
                console.log(event.detail.x);
                console.log(event.detail.y);
                console.log(event.detail.width);
                console.log(event.detail.height);
                console.log(event.detail.rotate);
                console.log(event.detail.scaleX);
                console.log(event.detail.scaleY);
            }
        });

        // Get the Cropper.js instance after initialized
        var cropper = image.data('cropper');
    </script>
@endpush
