<div class="container py-5">
    <h2 class="text-center">
        <i class="fas fa-check text-texmart-orange"></i> Задайте вопрос
    </h2>
    <div class="row justify-content-center align-items-center py-2">
        <div class="col-12 col-lg-6">
            <div class="card border-0">
                <img src="{{ asset("img/sharon-mccutcheon-tn57JI3CewI-unsplash.jpg") }}" class="card-img rounded-0"
                     alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay text-white text-center center-content">
                    <div>
                        <h5 class="card-title">Заполните форму.</h5>
                        <p class="card-text">Менеджеры компании с радостью ответят на ваши вопросы.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6 py-5 border shadow-sm col-sm-12">
            <form action="{{ route('bid.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col">
                        <label for="firstName"><i class="fas fa-user text-primary"></i> {{ __('Имя') }}
                        </label>
                        <input type="text"
                               class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror"
                               name="name" required autocomplete="name"
                               id="firstName" placeholder="Иван">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Ваш телефонный номер" class="d-block"><i
                            class="fas fa-phone-alt text-primary pt-3"></i> {{ __('Ваш телефонный номер:') }}
                    </label>
                    <input type="hidden" name="code">
                    <input type="text"
                           class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
                           name="phone" required autocomplete="phone"
                           id="phone-number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><i
                            class="fas fa-envelope text-primary"></i> {{ __('E-Mail') }}</label>
                    <input type="email"
                           class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror"
                           name="email" required autocomplete="email"
                           id="exampleFormControlInput1"
                           placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><i
                            class="fas fa-pencil-alt text-primary"></i> {{ __('Описание') }}</label>
                    <textarea class="form-control" name="bid" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Соcтавьте подробное описание"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit"
                            class="btn btn-danger text-white rounded-pill btn-lg px-5 py-2 shadow-lg scale-on-hover"> {{ __('Отправить') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
