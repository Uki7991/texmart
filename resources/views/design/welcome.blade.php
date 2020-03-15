@extends('design.layouts.app')


@section('content')
    <section class="min-vh-100" style="background-image: url('{{ asset('design/back.jpg') }}'); background-attachment: fixed; background-repeat: no-repeat;">
        <div class="container">
            <nav class="navbar navbar-expand-lg shadow-none navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo3.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link btn border border-warning bg-warning rounded py-2 px-3" href="#">Войти</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#"><i class="fas fa-bars fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-white my-5 py-5">
            <div class="row justify-content-center align-items-center position-relative">
                <div class="col-2 position-absolute" style="left: 0;">
                    <ul class="nav flex-column">
                        <li class="nav-item my-2">
                            <a href="#" class="text-white"><i class="fab fa-whatsapp fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="#" class="text-white"><i class="fab fa-twitch fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-8 text-center">
                    <h1 class="font-weight-bold display-4" style="line-height: 66px;">Швейный рынок <br>Кыргызстана онлайн</h1>
                    <p>
                        портал по поиску и размещению заказов на производство <br> одежды в швейных фабриках и оптовых покупок
                    </p>
                    <a href="#" class="btn btn-warning">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <img src="{{ asset('design/Arrow.svg') }}" alt="">
                </div>
            </div>
        </div>


        <div class="position-fixed" style="bottom: 10%; right: 5%;">
            <div class="position-relative">
                <a href="#" class="text-white d-flex">
                    <div class="btn btn-warning rounded-pill py-2 px-3 pr-5">свяжитесь с нами</div>
                    <div class="rounded-circle bg-warning border position-absolute" style="width: 50px; height: 50px; right: 0px;"><i class="fas fa-phone-volume position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);"></i></div>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-around">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header bg-warning text-center text-white">
                            <h2 class="font-weight-bold">Производителям</h2>
                        </div>
                        <div class="card-body px-5 row">
                            <div class="bg-danger rounded col-12 text-center text-white  py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Заказы</h3>
                                <p class="small">База заявок от заказчиков</p>
                            </div>
                            <div class="bg-danger rounded col-12 text-center text-white  py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Добавить компанию</h3>
                                <p class="small"> Пополните каталог производителей и получайте заказы</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-header bg-warning text-center text-white ">
                            <h2 class="font-weight-bold">Заказчикам</h2>
                        </div>
                        <div class="card-body px-5 row justify-content-around">
                            <div class="bg-danger rounded col-5 text-center  text-white py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Поставщики</h3>
                                <p class="small">База наших актуальных поставщиков</p>
                            </div>
                            <div class="bg-danger rounded col-5 text-center  text-white py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Добавить компанию</h3>
                                <p class="small">Пополните каталог производителей и получайте заказы</p>
                            </div>
                            <div class="bg-danger rounded col-5 text-center  text-white py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Добавить компанию</h3>
                                <p class="small">Пополните каталог производителей и получайте заказы</p>
                            </div>
                            <div class="bg-danger rounded col-5 text-center  text-white py-3 px-2 my-3">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                                <h3 class="h4">Добавить компанию</h3>
                                <p class="small">Пополните каталог производителей и получайте заказы</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-5">
                    <h2 class="mb-3 text-warning font-weight-bold">Что такое Texmart?</h2>
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
                <div class="col-6">
                    <img src="{{ asset('design/video.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-3 text-center">
                    <p class="display-3 mb-1 font-weight-bold text-warning">25</p>
                    <p>какие-то данные</p>
                </div>
                <div class="col-3 text-center">
                    <p class="display-3 mb-1 font-weight-bold text-warning">25</p>
                    <p>какие-то данные</p>
                </div>
                <div class="col-3 text-center">
                    <p class="display-3 mb-1 font-weight-bold text-warning">25</p>
                    <p>какие-то данные</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="text-center h1 font-weight-bold">Новости</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('design/design.png') }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8 bg-warning px-5 text-white">
                                <div class="card-body text-white px-5 row no-gutters h-100">
                                    <p class="card-text"><small class="text-white">{{ \Carbon\Carbon::today()->format('d.m.Y') }}</small></p>
                                    <h3 class="card-title h1">Мы обновили дизайн нашего сайта</h3>
                                    <p class="card-text text-white">Читать больше >></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <a href="#" class="card">
                        <div class="card-body p-5">
                            <h3 class="card-title text-warning font-weight-bold">Keys to writing copy that actually converts and sells users</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                            <p class="card-text mt-5">Читать больше >></p>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="#" class="card">
                        <div class="card-body p-5">
                            <h3 class="card-title text-warning font-weight-bold">Keys to writing copy that actually converts and sells users</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                            <p class="card-text mt-5">Читать больше >></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row mb-4">
                <h2 class="text-center col-12 font-weight-bold">Полезные статьи</h2>
            </div>
            <div class="row">
                <div class="card-deck">
                    <a href="#" class="card text-dark shadow-none border-0">
                        <img src="{{ asset('design/video.png') }}" class="rounded-0 card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <small class="text-muted">Читать больше >></small>
                        </div>
                    </a>
                    <a href="#" class="card text-dark shadow-none border-0">
                        <img src="{{ asset('design/video.png') }}" class="rounded-0 card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <small class="text-muted">Читать больше >></small>
                        </div>
                    </a>
                    <a href="#" class="card text-dark shadow-none border-0">
                        <img src="{{ asset('design/video.png') }}" class="rounded-0 card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <small class="text-muted">Читать больше >></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <footer class="border-top">
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('design/map.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <h2>О компании</h2>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">О Texmart</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Новости</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Полезные статьи</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Отзывы</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h2>Сервисы</h2>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Наши услуги</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Создать тендер</a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="text-dark">Добавить компанию</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <h2>Социальные</h2>
                            <ul class="nav">
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-whatsapp fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-twitch fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="nav-item mr-3 new-box row no-gutters justify-content-center align-items-center">
                                    <a href="#" class="text-warning"><i class="fab fa-facebook-f fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <label>Узнавате о выгодных предложениях <br> и новостях первыми</label>
                        <input id="email-feed" type="email" name="email">
                    </div>
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
