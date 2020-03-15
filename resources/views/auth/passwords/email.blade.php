@extends('layouts.promo')

@section('content')
    <div class="promo-register">
        <div class="backdrop"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-8 shadow-lg">
                    <div class="row">
{{--                        <div class="col-md-auto col-2 bg-light rounded-left py-3 text-secondary">--}}
{{--                            <ul class="nav flex-column">--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'facebook') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-facebook fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'vk') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-vk fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'google') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-google fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'twitter') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-twitter fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item my-2">--}}
{{--                                    <a href="{{ route('google.redirect', 'odnoklassniki') }}" class="text-secondary">--}}
{{--                                        <i class="fab fa-odnoklassniki-square fa-lg"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="col-12 col-md-6 shadow-left bg-white p-4">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                                <form method="POST" id="phoneForm" action="{{ route('password.email') }}">
                                    @csrf

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
                                        <label for="verification" class="text-md-right"><i
                                                class="fas fa-key text-primary"></i> {{ __('СМС-код') }}</label>

                                        <input id="verification" type="text"
                                               class="form-control rounded-pill shadow-sm @error('verification') is-invalid @enderror"
                                               name="verification" value="{{ old('verification') }}" autocomplete="verification" autofocus>
                                    </div>
                                    <small>Время до следующего смс: <span class="verification-timer"></span> сек &nbsp;&nbsp;&nbsp;&nbsp;</small>
                                    <small><a id="restart" href="#" class="text-dashed disabled text-muted">отправить снова</a></small>
                                    @error('verification')
                                    <span class="invalid-feedback first-uppercase" role="alert">
                                        <strong class="first-uppercase">{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-group text-center">
                                        <button type="submit" id="phoneFormBtn" class="btn btn-primary rounded-pill">
                                            {{ __('Отправить') }}
                                        </button>
                                    </div>
                                    <div class="form-group small text-dark text-center mt-1">
                                        Еще нет логина? <a href="{{ route('register') }}"
                                                           class="text-primary">Регистрация</a>
                                    </div>
                                </form>
                        </div>
                        <div
                            class="col d-flex align-items-center justify-content-center bg-info text-white p-4 rounded-right">
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

@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
    <link rel="stylesheet" href="{{asset('css/jquery.steps.css')}}">

@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>

    <script>
        $('#phoneFormBtn').click(e => {

        });

        function startTimer() {
            let timer = 30;
            let timerId = setInterval(() => {
                $('.verification-timer').html(timer--);
            }, 1000);
            setTimeout(() => {
                clearInterval(timerId);
                $('#restart').removeClass('disabled');
                $('#restart').removeClass('text-muted');
                $('#restart').addClass('text-primary');
            }, 31 * 1000);

        }
    </script>
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
