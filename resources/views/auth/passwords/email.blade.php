@extends('layouts.promo')

@section('content')
    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-8 shadow-lg">
                    <div class="row">
                        <div class="col-md-auto col-2 bg-light rounded-left py-3 text-secondary">
                            <ul class="nav flex-column">
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'facebook') }}" class="text-secondary">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'vk') }}" class="text-secondary">
                                        <i class="fab fa-vk fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'google') }}" class="text-secondary">
                                        <i class="fab fa-google fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'twitter') }}" class="text-secondary">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'odnoklassniki') }}" class="text-secondary">
                                        <i class="fab fa-odnoklassniki-square fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10 col-md-6 shadow-left bg-white p-4">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right"><i
                                            class="fas fa-envelope text-primary"></i> {{ __('E-Mail') }}</label>

                                    <input id="email" type="email"
                                           class="form-control shadow-sm rounded-pill @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right"><i
                                            class="fas fa-key text-primary"></i> {{ __('Password') }}</label>

                                    <input id="password" type="password"
                                           class="form-control shadow-sm rounded-pill @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group text-center mb-0">
                                    @include('partials.btn.submit_btn', ['title' => 'Вход', 'class' => 'rounded-pill'])

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link btn-sm" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="form-group small text-dark text-center mt-1">
                                    Еще нет логина? <a href="{{ route('register') }}"
                                                       class="text-primary">Регистрация</a>
                                </div>
                            </form>
                        </div>
                        <div
                            class="col d-flex align-items-center justify-content-center bg-info text-white p-2 rounded-right">
                            <div>
                                <div class="mb-3 mx-auto">
                                    <a href="{{ url('/') }}" class="h1 text-white text-center">
                                        <img src="{{ asset('img/logo.png') }}" width="200px" height="auto" alt="">
                                    </a>
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
