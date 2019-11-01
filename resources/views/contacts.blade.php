@extends('layouts.app')
@section('content')
    {{--<section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="bg-contacts">
        <div class="container h-100">
            <div class="row align-items-end h-100">
                <div class="h1 text-white">
                    Контакты
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <iframe title="Офис Texmart.kg"
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
                        <p class="m-0 p-0 ml-2">Кыргызстан, г. Бишкек, ул. Шопокова 121/1</p>
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
    </div>--}}
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>

    <section class=" mt-5 pt-3">
        <div class="container">
            <div class="row">

                <div class="col-3">

                </div>

                <div class="col-6">
                    <section id="blog-components" class="text-center">

                        <!--Section heading-->
                        <h3 class="section-heading mb-5 h1">Blog components</h3>

                        <h5 class="">Author Box</h5>

                        <!--Section: Author Box-->
                        <section class="my-5">

                            <!-- Card header -->
                            <div class="card-header border-0 font-weight-bold d-flex justify-content-between">
                                <p class="mr-4 mb-0">About the author</p>
                                <ul class="list-unstyled list-inline mb-0">
                                    <li class="list-inline-item"><a href="" class="mr-3"><i class="fas fa-envelope mr-1"></i>Send message</a></li>
                                    <li class="list-inline-item"><a href="" class="mr-3"><i class="fas fa-user mr-1"></i>See profile</a></li>
                                    <li class="list-inline-item"><a href="" class="mr-3"><i class="fas fa-feed mr-1"></i>Follow</a></li>
                                </ul>
                            </div>

                            <div class="media mt-4 px-1 text-md-left">
                                <img class="card-img-100 d-flex z-depth-1 mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="font-weight-bold mt-0">
                                        <a href="">Danny Newman</a>
                                    </h5>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consectetur accusamus velit nostrum et magnam.
                                </div>
                            </div>

                        </section>
                        <!--Section: Author Box-->

                    </section>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </section>
@endsection
