<section id="form-review" class="bg-form-images lazy">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center  py-2">
            <div class="col-12 col-lg-5">
                <h2 class="text-orange">
                    Заполните форму
                </h2>
                <p class="text-white">
                    Если вы ищете производителя и хотите разместить заказ
                </p>
            </div>
            <div class="col-12 col-lg-5 py-5 border-0 shadow-0 col-sm-12 bg-white-50 rounded text-light">
                <form action="{{ route('bid.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="firstName"><i class="fas fa-user text-primary text-orange"></i> {{ __('Имя') }}
                            </label>
                            <input type="text"
                                   class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror"
                                   name="name" required autocomplete="name"
                                   id="firstName" placeholder="Иван">
                        </div>
                    </div>
                    <div class="form-group text-dark">
                        <label for="phone-number " class="d-block"><i
                                class="fas fa-phone-alt text-primary pt-3 text-orange"></i> {{ __('Ваш телефонный номер:') }}
                        </label>
                        <input type="hidden" name="code">
                        <input type="text"
                               class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
                               name="phone" required autocomplete="phone"
                               id="phone-number">
                        <span id="valid-msg" class="hide">✓ Valid</span>
                        <span id="error-msg" class="hide"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><i
                                class="fas fa-envelope text-primary text-orange"></i> {{ __('E-Mail') }}</label>
                        <input type="email"
                               class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror"
                               name="email" required autocomplete="email"
                               id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><i
                                class="fas fa-pencil-alt text-primary text-orange"></i> {{ __('Описание') }}</label>
                        <textarea class="form-control" name="bid" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="Соcтавьте подробное описание"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit"
                                class="btn btn-texmart-orange text-white rounded-pill btn-lg px-5 py-2 shadow-lg scale-on-hover"> {{ __('Отправить') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>
@push('styles')
    <style>
        .hide {
            display: none;
        }
    </style>
@endpush
@push('scripts')
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/
        let inputPhone = $('#phone-number'),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        let errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        let iti = inputPhone.intlTelInput({
            initialCountry: "kg",
            preferredCountries: ["ru", "kg", "kz"],
            separateDialCode: true,
            excludeCountries: ["xk"],
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    let countryCode = (resp && resp.country) ? resp.country : "";
                    console.log(countryCode);
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });
        inputPhone.on('focus', function(e) {
            console.log('focused')

            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code"]').val(code);
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
            $this.val('');

            let
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            // console.log(activePlaceholder + ' => ' + newMask);

            // Init new mask for focused input
            $this.mask(newMask);
            $this.val('');
        });
        console.log(iti);

        inputPhone.on('countrychange', (e, c) => {
            console.log('changed')
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
            $this.val('');
        });

        let reset = function() {
            inputPhone.removeClass("error");
            errorMsg.innerHTML = "";
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        inputPhone.on('blur', function() {
            console.log(iti);
            reset();
            if (inputPhone.val().trim()) {
                if (iti.isValidNumber()) {
                    validMsg.removeClass("hide");
                } else {
                    inputPhone.addClass("error");
                    let errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        inputPhone.on('change', reset);
        inputPhone.on('keyup', reset);

    </script>
@endpush
