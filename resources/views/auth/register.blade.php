@extends('layouts.promo')

@section('content')
    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 min-vh-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-10 shadow-lg">
                    <div class="row">
                        <div class="col-md-auto col-2 bg-light rounded-left py-3 text-secondary">
                            <ul class="nav flex-column">
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'facebook') }}" class="text-secondary">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item d-none my-2">
                                    <a href="{{ route('google.redirect', 'vk') }}" class="text-secondary">
                                        <i class="fab fa-vk fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item my-2">
                                    <a href="{{ route('google.redirect', 'google') }}" class="text-secondary">
                                        <i class="fab fa-google fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item d-none my-2">
                                    <a href="{{ route('google.redirect', 'twitter') }}" class="text-secondary">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item d-none my-2">
                                    <a href="{{ route('google.redirect', 'odnoklassniki') }}" class="text-secondary">
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
                                    <label for="name" class="text-md-right"><i
                                            class="fas fa-user text-primary"></i> {{ __('ФИО') }}</label>

                                    <input id="name" type="text"
                                           class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="phone-number" class="d-block"><i
                                            class="fas fa-phone-alt text-primary pt-3"></i> {{ __('Ваш телефонный номер:') }}
                                    </label>
                                    <input type="hidden" name="code">
                                    <input type="text"
                                           class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
                                           name="phone" required autocomplete="phone"
                                           id="phone-number">
                                    @error('phone')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right"><i
                                            class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>

                                    <input id="password" type="password"
                                           class="form-control rounded-pill shadow-sm @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class=" col-form-label text-md-right"><i
                                            class="fas fa-key text-primary"></i> {{ __('Подтвердите пароль') }}</label>

                                    <input id="password-confirm" type="password"
                                           class="form-control rounded-pill shadow-sm" name="password_confirmation"
                                           required autocomplete="new-password">
                                </div>

                                <div class="form-group mb-0 mx-auto text-center">
                                    @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Регистрация'])
                                </div>
                                <div class="form-group small text-dark text-center mt-1">
                                    Уже есть логин? <a href="{{ route('login') }}" class="text-primary">Вход</a>
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
    @include('partials.scripts.input_radio_check')
@endpush
@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
    <style>

    </style>
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
