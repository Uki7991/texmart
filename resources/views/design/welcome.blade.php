@extends('design.layouts.app')


@section('content')
    <section class="min-vh-100"
             style="background-image: url('{{ asset('design/back.jpg') }}'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <nav class="navbar navbar-expand-lg shadow-none navbar-dark px-0">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo3.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto flex-row justify-content-around mb-3 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Покупателю
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Поставщику
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link btn border border-white rounded py-2 px-3" href="#">Создать тендер</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn border border-white rounded py-2 px-3" href="#">Добавить компанию</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn border texmart-border-primary texmart-bg-primary rounded py-2 px-3"
                               href="#">Войти</a>
                        </li>
                        {{--                        <li class="nav-item d-flex align-items-center">--}}
                        {{--                            <a class="nav-link" href="#"><i class="fas fa-bars fa-lg"></i></a>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-white my-lg-5 py-lg-5">
            <div class="row justify-content-center align-items-center position-relative py-lg-5 my-5">
                <div class="col-lg-2 col-12 position-lg-absolute position-relative d-flex d-lg-block justify-content-center"
                     style="left: 0;">
                    <ul class="nav flex-lg-column">
                        <li class="nav-item my-2 mx-2 mx-lg-0">
                            <a href="#" class="text-white"><i class="fab fa-whatsapp fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2 mx-2 mx-lg-0">
                            <a href="#" class="text-white"><i class="fab fa-telegram-plane fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2 mx-2 mx-lg-0">
                            <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2 mx-2 mx-lg-0">
                            <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2 mx-2 mx-lg-0">
                            <a href="#" class="text-white"><i class="fab fa-twitch fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-12 text-center">
                    <h1 class="font-weight-bold display-4 d-none d-lg-block" style="">Швейный рынок <br>Кыргызстана
                        онлайн</h1>
                    <h1 class="font-weight-bold d-block d-lg-none" style="">Швейный рынок <br>Кыргызстана онлайн</h1>
                    <p class="px-3 ">
                        портал по поиску и размещению заказов на производство <br> одежды в швейных фабриках и оптовых
                        покупок
                    </p>
                    <a href="#" class="btn texmart-bg-primary rounded">Подробнее</a>
                </div>
                <div class="col-12 text-center pt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-5">
                            <form action="#" method="get" class="position-relative">
                                <input type="text" placeholder="Найти..." class="form-control pr-5">
                                <i class="fas fa-search text-white position-absolute shadow texmart-bg-primary rounded"
                                   style="right: 0;top: 50%;transform: translateY(-50%);border: 1px solid #3e3e3e20;padding: 11px;"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="container">--}}
        {{--            <div class="row justify-content-center py-5">--}}

        {{--            </div>--}}
        {{--        </div>--}}


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <img src="{{ asset('design/Arrow.svg') }}" alt="">
                </div>
            </div>
        </div>



    </section>

    <div class="position-fixed" style="bottom: 10%; right: 5%;">
        <div class="position-relative">
            <a href="#" class="text-white d-flex">
                <div class="btn texmart-bg-primary rounded-pill d-none d-lg-block py-2 px-3 pr-5">свяжитесь с нами</div>
                <div class="rounded-circle texmart-bg-primary border position-absolute"
                     style="width: 50px; height: 50px; right: 0px;"><i class="fas fa-phone-volume position-absolute"
                                                                       style="left: 50%; top: 50%; transform: translate(-50%, -50%);"></i>
                </div>
            </a>
        </div>
    </div>
    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 justify-content-around">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header py-4 rounded-bottom texmart-bg-primary text-center text-white">
                            <h2 class="font-weight-normal">Производителям</h2>
                        </div>
                        <div class="card-body row justify-content-center px-5">
                            <a href="#"
                               class="texmart-bg-secondary row align-items-center rounded col-12 text-center text-dark d-flex align-items-center py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="fas fa-stream texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Заказы</h3>
                                    <p class="small m-0">База заявок от заказчиков</p>
                                </div>
                            </a>
                            <a href="#"
                               class="texmart-bg-secondary row align-items-center rounded col-12 text-center text-dark d-flex align-items-center py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="far fa-building texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Добавить компанию</h3>
                                    <p class="small m-0"> Пополните каталог производителей и получайте <br> заказы</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header texmart-bg-primary py-4 rounded-bottom text-center text-white">
                            <h2 class="font-weight-normal">Заказчикам</h2>
                        </div>
                        <div class="card-body row no-gutters justify-content-around">
                            <a href="#"
                               class="texmart-bg-secondary rounded col-12 col-md-12 col-lg-5 text-center d-flex align-items-center text-dark py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="fas fa-user-friends texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Поставщики</h3>
                                    <p class="small m-0">База наших актуальных поставщиков</p>
                                </div>
                            </a>
                            <a href="#"
                               class="texmart-bg-secondary rounded col-12 col-md-12 col-lg-5 text-center d-flex align-items-center text-dark py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="fas fa-envelope-open-text texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Товары</h3>
                                    <p class="small m-0">База товаров наших <br> производителей</p>
                                </div>
                            </a>
                            <a href="#"
                               class="texmart-bg-secondary rounded col-12 col-md-12 col-lg-5 text-center d-flex align-items-center text-dark py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="fas fa-suitcase texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Услуги</h3>
                                    <p class="small m-0">Услуги предоставляемые <br> порталом Texmart</p>
                                </div>
                            </a>
                            <a href="#"
                               class="texmart-bg-secondary rounded col-12 col-md-12 col-lg-5 text-center d-flex align-items-center text-dark py-3 px-2 my-3">
                                <div class="col-12 py-3">
                                    <i class="fas fa-exclamation-circle texmart-text-primary fa-2x"></i>
                                    <h3 class="h4 font-weight-medium">Создать тендер</h3>
                                    <p class="small m-0">Заполните форму и <br> находите подходящих <br> исполнителей</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-5 order-1 order-md-0">
                    <h2 class="mb-3 texmart-text-primary font-weight-bold">Что такое Texmart?</h2>
                    <p>Новая платформа ориентированная
                        на поиск заказчиков и производителей
                        текстильной и швейной продукции</p>
                    <div class="mt-5">
                        <p>
                            <img src="{{ asset('design/like.svg') }}" alt="">
                            Технология отслеживания контроля качества продукций
                        </p>
                        <p>
                            <img src="{{ asset('design/feed.svg') }}" alt="">
                            Реальные отзывы и рейтинги участников.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-0 order-md-1 mb-4 mb-md-0">
                    <img src="{{ asset('design/video.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 mb-sm-3 mb-md-0 col-md-3 col-lg-3 text-center">
                    <p class="display-2 mb-0 line-height-90 font-weight-bold texmart-text-primary">25</p>
                    <p class="font-weight-medium">какие-то данные</p>
                </div>
                <div class="col-12 col-sm-6 mb-sm-3 mb-md-0 col-md-3 col-lg-3 text-center">
                    <p class="display-2 mb-0 line-height-90 font-weight-bold texmart-text-primary">25</p>
                    <p class="font-weight-medium">какие-то данные</p>
                </div>
                <div class="col-12 col-sm-6 mb-sm-3 mb-md-0 col-md-3 col-lg-3 text-center">
                    <p class="display-2 mb-0 line-height-90 font-weight-bold texmart-text-primary">25</p>
                    <p class="font-weight-medium">какие-то данные</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        @include('design.applications')
    </section>

    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="text-center texmart-text-primary">Наши услуги</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-deck">
                        <div class="card shadow border-0 texmart-border-radius">
                            <div class="card-body text-center px-5">
                                <p class="mb-0">
                                    <i class="fas fa-people-carry fa-3x texmart-text-primary"></i>
                                </p>
                                <h3 class="mb-4">Отдел контроля качества</h3>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                            </div>
                            <div class="card-footer text-center border-0 rounded-10 bg-white rounded-bottom" style="background: url('{{ asset('design/card-bottom.png') }}'); background-size: cover; background-repeat: no-repeat;">
                                <a href="#" class="btn btn-white texmart-border-radius mt-5 mb-2">Подробнее</a>
                            </div>
                        </div>
                        <div class="card shadow border-0 texmart-border-radius">
                            <div class="card-body text-center px-5">
                                <p class="mb-0">
                                    <i class="fas fa-people-carry fa-3x texmart-text-primary"></i>
                                </p>
                                <h3 class="mb-4">Отдел контроля качества</h3>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                            </div>
                            <div class="card-footer text-center border-0 rounded-10 bg-white rounded-bottom" style="background: url('{{ asset('design/card-bottom.png') }}'); background-size: cover; background-repeat: no-repeat;">
                                <a href="#" class="btn btn-white texmart-border-radius mt-5 mb-2">Подробнее</a>
                            </div>
                        </div>
                        <div class="card shadow border-0 texmart-border-radius">
                            <div class="card-body text-center px-5">
                                <p class="mb-0">
                                    <i class="fas fa-people-carry fa-3x texmart-text-primary"></i>
                                </p>
                                <h3 class="mb-4">Отдел контроля качества</h3>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                                <p class="card-text mb-1">-какая-то услуга</p>
                            </div>
                            <div class="card-footer text-center border-0 rounded-10 bg-white rounded-bottom" style="background: url('{{ asset('design/card-bottom.png') }}'); background-size: cover; background-repeat: no-repeat;">
                                <a href="#" class="btn btn-white texmart-border-radius mt-5 mb-2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
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
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="text-center texmart-text-primary h1">Новости</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="card shadow-sm mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 col-12">
                                <img src="{{ asset('design/design.png') }}" class="card-img rounded-0 h-100" style="object-fit: cover;" alt="">
                            </div>
                            <div class="col-md-8 col-12 texmart-bg-primary px-0 px-md-5 text-white">
                                <div class="card-body text-white position-relative h-100">
                                    <p class="card-text"><small
                                            class="text-white">{{ \Carbon\Carbon::today()->format('d.m.Y') }}</small>
                                    </p>
                                    <h3 class="card-title pb-5 mb-3 d-block d-lg-none font-weight-bold"
                                        style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                        Мы обновили <br> дизайн нашего сайта</h3>
                                    <h3 class="card-title display-4 d-none d-lg-block font-weight-bold"
                                        style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                        Мы обновили <br> дизайн нашего сайта</h3>
                                    <p class="card-text w-100 position-absolute text-white" style="bottom: 30px;">Читать больше >></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mt-5">
                <div class="col mb-4">
                    <a href="#" class="card h-100 shadow-lg">
                        <div class="card-body p-3 p-md-5">
                            <h3 class="card-title line-height-140 texmart-text-primary font-weight-bold">Keys to writing copy that actually
                                converts and sells users</h3>
                            <p class="card-text text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore...</p>
                            <p class="card-text mt-5 text-black">Читать больше >></p>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="#" class="card h-100 shadow-lg">
                        <div class="card-body p-3 p-md-5">
                            <h3 class="card-title line-height-140 texmart-text-primary font-weight-bold">Keys to writing copy that actually
                                converts and sells users</h3>
                            <p class="card-text text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore...</p>
                            <p class="card-text mt-5 text-black">Читать больше >></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row mb-4">
                <h2 class="text-center col-12 h1 texmart-text-primary">Полезные статьи</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-deck">
                        <a href="#" class="card text-dark shadow-none border-0">
                            <img src="{{ asset('design/first_article.png') }}" class="rounded-0 card-img-top" style="object-fit: cover; min-height: 340px; max-height: 340px;" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h3 class="card-title h4" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            </div>
                            <div class="card-footer px-0 pt-0 border-0 bg-white">
                                <p class="text-black">Читать больше >></p>
                            </div>
                        </a>
                        <a href="#" class="card text-dark shadow-none border-0">
                            <img src="{{ asset('design/second_article.png') }}" class="rounded-0 card-img-top" style="object-fit: cover; min-height: 340px; max-height: 340px;" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h3 class="card-title h4" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            </div>
                            <div class="card-footer px-0 pt-0 border-0 bg-white">
                                <p class="text-black">Читать больше >></p>
                            </div>
                        </a>
                        <a href="#" class="card text-dark shadow-none border-0">
                            <img src="{{ asset('design/third_article.png') }}" class="rounded-0 card-img-top" style="object-fit: cover; min-height: 340px; max-height: 340px;" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h3 class="card-title h4" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            </div>
                            <div class="card-footer px-0 pt-0 border-0 bg-white">
                                <p class="text-black">Читать больше >></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center texmart-text-primary h1">Партнеры</h2>
                </div>
            </div>
            <div class="row justify-content-center py-5 align-items-center">
                <div class="col-12 col-sm-6 mb-5 mb-sm-0 text-center col-md-4">
                    <img src="{{ asset('design/ak-ilbirs.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-1 d-none d-md-block"></div>
                <div class="col-12 col-sm-6 mb-5 mb-sm-0 text-center col-md-4">
                    <img src="{{ asset('design/expresss.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="border-top">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-md-5 mt-lg-0">
                    <img src="{{ asset('design/map.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-6 mt-5 mt-md-0 text-center text-md-left">
                            <h2>О компании</h2>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">О Texmart</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Новости</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Полезные статьи</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Отзывы</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 mt-5 mt-md-0 text-center text-md-left">
                            <h2>Сервисы</h2>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Наши услуги</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Создать тендер</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-muted">Добавить компанию</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-12">
                            <h2>Социальные</h2>
                            <ul class="nav">
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-whatsapp fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-telegram-plane fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-facebook-f fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-vk fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label class="text-muted">Узнавате о выгодных предложениях <br> и новостях первыми</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <form action="#" method="get" class="position-relative">
                                <input type="email" placeholder="Email" class="form-control pr-5">
                                <i class="fas fa-envelope text-white position-absolute shadow texmart-bg-primary rounded"
                                   style="right: 0;top: 50%;transform: translateY(-50%);border: 1px solid #3e3e3e20;padding: 11px;"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mt-5 text-center">
                    <a href="#" class="text-muted small">Made with <span class="text-danger">&hearts;</span> by Mount</a>
                </div>
            </div>
        </div>
    </footer>

@endsection

@push('styles')
    <style>
        .new-box {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            background: #FFFFFF;
            height: 40px;
            width: 40px;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function () {
            // slick carousel
            $('#reviews-carousel').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<img src="{{ asset('design/arrow_left.svg') }}" class="slick-prev" style="" />',
                nextArrow: '<img src="{{ asset('design/arrow_right.svg') }}" class="slick-next" style="" />',
                fade: true,
                mobileFirst: true,
                speed: 600
            });

        });
    </script>
@endpush
