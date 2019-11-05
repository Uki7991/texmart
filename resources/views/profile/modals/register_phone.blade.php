<!-- Modal -->
<div class="modal fade" id="registerPhoneProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-body">
                <h2>Обновление процесса регистрации / авторизации</h2>
                <p>Мы обновили процесс регистрации / авторизации на сайте.
                    Теперь регистрация и авторизация будут осуществляться с помощью номера телефона</p>
                @if(auth()->check() && auth()->user()->phone_verification == null)
                    <form class="text-center" method="POST" action="{{ route('register.phone') }}">
                        @csrf

                        <div class="form-group">
                            <label for="phone-number" class="d-block"><i
                                    class="fas fa-phone-alt text-primary pt-3"></i> {{ __('Ваш телефонный номер:') }}
                            </label>
                            <input type="hidden" name="code">
                            <input type="text"
                                   class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
                                   name="phone" required autocomplete="phone"
                                   id="phone-number-register">
                            @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-0 mx-auto text-center">
                            @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Сохранить'])
                        </div>
                    </form>
                @endif
                @if(auth()->check() && auth()->user()->phone_verification != null)
                    <form class="text-center" method="POST" action="{{ route('register.code') }}">
                        @csrf

                        <div class="row justify-content-center">
                            <div class="form-group col-4">
                                <label for="code-verification" class="d-block"><i
                                        class="fas fa-key text-primary pt-3"></i> {{ __('Ваш активационный код:') }}
                                </label>
                                <input type="number" required class="form-control rounded-pill shadow-sm" name="code_verification" id="code-verification">

                                @error('code_verification')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-0 mx-auto text-center">
                            @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Активировать'])
                        </div>
                    </form>

                    <form action="{{ route('reregister.phone') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group mb-0">
                                <label for="phone-number" class="d-block"><i
                                        class="fas fa-phone-alt text-primary pt-3"></i> {{ __('Ваш телефонный номер: ' . auth()->user()->phone.'.') }}
                                </label>
                                <input type="hidden" name="code">
                                <input type="text"
                                       class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
                                       name="phone" required autocomplete="phone"
                                       id="phone-number-register">
                                @error('phone')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <small class="col-12 text-muted text-center">Если это не ваш номер или код не пришел вам, то введите снова</small>

                        </div>
                        <div class="form-group mb-0 mt-3 mx-auto text-center">
                            @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Изменить'])
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>




@push('styles')
    <link  rel="stylesheet"  href="{{ asset("css/intlTelInput.min.css") }}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/
        $("#phone-number-register").intlTelInput({
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
        $('#phone-number-register').on('focus', function(e) {
            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code"]').val(code);
            var $this = $(this),
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            console.log(activePlaceholder + ' => ' + newMask);
            // Init new mask for focused input
            $this.mask(newMask);
        });
        $('#phone-number-register').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>
@endpush
@push('scripts')
    <script>
        $('#registerPhoneProfile').modal({
            backdrop: 'static',
            keyboard: false,
            show: true,
        });
    </script>
@endpush
