@extends('layouts.promo')

@section('content')

    @includeWhen(\Illuminate\Support\Facades\Session::has('flash'), 'partials.alerts.login_email')

    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 min-vh-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-8 shadow-lg">
                    <div class="row">
{{--                        <div class="col-md-auto col-2 bg-light rounded-left py-3 text-secondary">--}}
{{--                            <ul class="nav flex-column">--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'facebook') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-facebook fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item d-none my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'vk') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-vk fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'google') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-google fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item d-none my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'twitter') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-twitter fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item d-none my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'odnoklassniki') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-odnoklassniki-square fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="col-12 col-md-6 shadow-left bg-white p-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
{{--                                <div class="form-group">--}}
{{--                                    <label for="email" class="col-form-label text-md-right"><i--}}
{{--                                            class="fas fa-user text-primary"></i> {{ __('E-Mail или номер телефона') }}</label>--}}

{{--                                    <input id="email" type="text"--}}
{{--                                           class="form-control shadow-sm rounded-pill @error('email') is-invalid @enderror"--}}
{{--                                           name="email" value="{{ old('email') }}" required autocomplete="email"--}}
{{--                                           autofocus>--}}
{{--                                    <small id="emailHelp" class="form-text text-muted text-center">Номер телефона обязательно писать с кодом страны</small>--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label for="phone-number" class="d-block"><i
                                            class="fas fa-phone-alt text-primary pt-3"></i> {{ __('Ваш телефонный номер:') }}
                                    </label>
                                    <input type="hidden" name="code">
                                    <input type="text"
                                           class="form-control rounded-pill w-100 shadow-sm @error('email') is-invalid @enderror"
                                           name="email" required autocomplete="phone"
                                           id="phone-number">
                                    @error('email')
                                    <span class="invalid-feedback d-block first-uppercase" role="alert">
                                        <strong class="">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right"><i
                                            class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>

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
                                            {{ __('Забыли пароль?') }}
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

@push('scripts')
    @include('partials.scripts.submit_btn')
    @include('partials.scripts.input')
@endpush

@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/

        $("#phone-number").intlTelInput({
            initialCountry: "kg",
            preferredCountries: ["ru", "kg", "kz"],
            separateDialCode: true,
            excludeCountries: ["xk"],
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    console.log(countryCode);
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });
        $('#phone-number').on('focus', function(e) {
            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code"]').val(code);
            var $this = $(this),
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            // console.log(activePlaceholder + ' => ' + newMask);

            // Init new mask for focused input
            $this.mask(newMask);
        });

        $('#phone-number').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>
@endpush
