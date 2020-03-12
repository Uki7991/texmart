@extends('admin.dashboard')

@section('dashboard_content')
    @if(\Illuminate\Support\Facades\Session::has('status'))
        <div class="alert alert-success fixed-top w-50 alert-dismissible fade show" role="alert">
            <strong>{{ \Illuminate\Support\Facades\Session::get('status')['message'] }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form class="container" method="POST" action="{{ route('admin.user.store') }}">
        @csrf

        <div class="form-group">
            <div class="row justify-content-around">
                <label>
                    <input id="radio_customer" name="user_type" type="radio" value="0" checked>
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
                    class="fas fa-user text-primary"></i> {{ __('ФИО') }} <span class="text-danger">*</span></label>

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
            <label for="email" class="text-md-right"><i
                    class="fas fa-user text-primary"></i> {{ __('Email') }}</label>

            <input id="email" type="email"
                   class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" autocomplete="name" autofocus>

            @error('email')
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

        <div class="form-group mb-0 mx-auto text-center">
            @include('partials.btn.submit_btn', ['class' => 'rounded-pill', 'title' => 'Создать'])
        </div>
    </form>

@endsection


@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
@endpush

@push('scripts')
    <script src="{{asset('js/field.js')}}"></script>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script src="{{ asset('js/editor.js') }}"></script>
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
