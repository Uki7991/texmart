@extends('layouts.promo')

@section('content')
    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-10 shadow-lg">
                    <div class="row">
                        <div class="col-md-auto col-2 bg-light rounded-left py-3 text-secondary">
                            <ul class="nav flex-column">
                                <li class="nav-item my-2">
                                    <a href="#" class="text-secondary">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="#" class="text-secondary">
                                        <i class="fab fa-vk fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="#" class="text-secondary">
                                        <i class="fab fa-google fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="#" class="text-secondary">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="#" class="text-secondary">
                                        <i class="fab fa-odnoklassniki-square fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10 col-md-6 shadow-lg bg-white p-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <div class="row justify-content-around">
                                        <label>
                                            <input name="user_type" type="radio" value="0" checked>
                                            <span class="text-dotted text-underline font-weight-bold">Заказчик</span>
                                        </label>
                                        <label class="">
                                            <input name="user_type" type="radio" value="1">
                                            <span class="text-dotted">Производство</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="text-md-right"><i class="fas fa-user text-primary"></i> {{ __('ФИО') }}</label>

                                        <input id="name" type="text" class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right"><i class="fas fa-envelope text-primary"></i> {{ __('E-Mail') }}</label>

                                        <input id="email" type="email" class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right"><i class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>

                                        <input id="password" type="password" class="form-control rounded-pill shadow-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class=" col-form-label text-md-right"><i class="fas fa-key text-primary"></i> {{ __('Подтвердите пароль') }}</label>

                                        <input id="password-confirm" type="password" class="form-control rounded-pill shadow-sm" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group mb-0 mx-auto text-center">
                                    @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Регистрация'])
                                </div>
                                <div class="form-group small text-dark text-center mt-1">
                                    Уже есть логин? <a href="{{ route('login') }}" class="text-primary">Вход</a>
                                </div>
                            </form>
                        </div>
                        <div class="col d-flex align-items-center justify-content-center bg-info text-white p-2 rounded-right">
                            <div>
                                <div class="mb-3 mx-auto">
                                    <a href="{{ url('/') }}" class="h1 text-white text-center">Texmart</a>
                                </div>
                                <h2 class="font-weight-bold h1">Преимущества</h2>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><i class="fas fa-check"></i> Бесплатные консультации</li>
                                    <li class="nav-item"><i class="fas fa-check"></i> Связь с производством</li>
                                    <li class="nav-item"><i class="fas fa-check"></i> 0% комиссий</li>
                                    <li class="nav-item"><i class="fas fa-check"></i> Дешево</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    @include('partials.scripts.submit_btn')
    @include('partials.scripts.input')
    @include('partials.scripts.input_radio_check')
@endpush
