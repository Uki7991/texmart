@extends('layouts.promo')

@section('content')
    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 min-vh-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-10 shadow-lg">
                    <div class="row">
                        <div class="col-md-auto col-12 bg-light rounded-left  py-3 text-secondary">
                            <ul class="nav flex-md-column">
                                <li class="nav-item mx-auto my-2">
                                    <a href="{{ route('google.redirect', 'facebook') }}" class="text-secondary">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item d-none my-2">
                                    <a href="{{ route('google.redirect', 'vk') }}" class="text-secondary">
                                        <i class="fab fa-vk fa-lg"></i>
                                    </a>
                                </li>
                                <li class="nav-item mx-auto my-2">
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
                        {{--Register form start--}}
                        <div class="col-12 col-md-6 shadow-lg bg-white p-0">
                            <div id="registration-steps">
                                <h3>Выберите роль</h3>
                                <section>
                                    <div class="container">
                                        <div class="row justify-content-around my-4">
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-success role_btn" data-role="4">Я - заказчик</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-success role_btn" data-role="5">Я - производитель</a>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                                <h3>Заполните данные</h3>
                                <section>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group d-none">
                                            <div class="row justify-content-around">
                                                <label>
                                                    <input id="radio_customer" name="user_type" type="radio" value="0">
                                                    <span class="text-dotted text-underline font-weight-bold">Заказчик</span>
                                                </label>
                                                <label class="">
                                                    <input id="radio_production" name="user_type" type="radio" value="1">
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
                                            <span class="invalid-feedback first-uppercase" role="alert">
                                        <strong class="first-uppercase">{{ $message }}</strong>
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
                                            <span class="invalid-feedback d-block first-uppercase" role="alert">
                                        <strong class="">{{ $message }}</strong>
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
                                            <span class="invalid-feedback first-uppercase" role="alert">
                                        <strong class="first-uppercase">{{ $message }}</strong>
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
                                </section>
                            </div>
                        </div>

                        {{--Registration finish--}}
                        <div class="col d-flex align-items-center justify-content-center bg-info text-white p-2 rounded-right ">
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
    <link rel="stylesheet" href="{{asset('css/jquery.steps.css')}}">
@endpush
@push('scripts')
    <script src="{{ asset('js/jquery.steps.js') }}"></script>

    <script>
        $("#registration-steps").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
            enablePagination: false
        });

        $('.role_btn').click(e => {
            e.preventDefault();
            let role = $(e.currentTarget).data('role');
            console.log(role);

            if (role == 4) {
                $('#radio_customer').attr('checked', 'checked');
                $('#radio_production').removeAttr('checked', 'checked');
            } else if (role == 5) {
                $('#radio_production').attr('checked', 'checked');
                $('#radio_customer').removeAttr('checked', 'checked');
            } else {
                $('#radio_customer').attr('checked', 'checked');
                $('#radio_production').removeAttr('checked', 'checked');
            }

            $('#registration-steps').steps("next");
        })
    </script>
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
