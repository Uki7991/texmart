<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <div id="example-basic">
                <h3>Keyboard</h3>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-around my-4">
                            <div class="col-auto">
                                <a href="#" class="btn btn-success">Заказчик</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-success">Производитель</a>
                            </div>
                        </div>
                    </div>

                </section>
                <h3>Effects</h3>
                <section>
                    <div class="container py-5">
                        <h2 class="text-center" style="color: #e99b33 !important;padding-bottom: 25px">
                            Категории
                        </h2>
                        <div class="row justify-content-center">
                            <div class="row col-12 col-md-10">
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/women_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Женская одежда</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/polo_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Мужская одежда</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/baby_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Детская одежда</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/specialist_dress_category.png') }}"
                                             alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Спец одежда</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/big_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Батальные размеры</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative " style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/other_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Прочее</p>
                                    </a>
                                    <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card shadow position-relative " style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/cloth_dress_category.png') }}" alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center pb-1" style="min-height: 48px;">Ткань, фурнитура</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                                    <a href="#" class="card  shadow " style="border-radius: 10px;">
                                        <img class="w-25 mx-auto pt-3" src="{{ asset('icons/service_dress_category.png') }}"
                                             alt="Card image cap">
                                        <p class="card-title mt-4 text-dark text-center pb-1" style="min-height: 48px;">Услуги</p>
                                        <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h3>Pager</h3>
                <section>
                    <div class="col-5">
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
                                       id="phone-number_3">
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
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">
    Launch demo modal
</button>
@push('scripts')
    <script>
        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
        $("#phone-number_3").intlTelInput({
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
        $('#phone-number_3').on('focus', function(e) {
            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code"]').val(code);
            let $this = input,
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            // console.log(activePlaceholder + ' => ' + newMask);

            // Init new mask for focused input
            $this.mask(newMask);
        });

        $('#phone-number_3').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>
@endpush
