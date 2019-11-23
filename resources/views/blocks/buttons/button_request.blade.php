<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Напишите нам</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{ route('bid.store') }}" method="post" class="col-12 text-center" >
                    @csrf
                    <div class="md-form mb-5">
                        <input type="name" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Ваше имя</label>
                    </div>
                    <div class="md-form mb-5 d-flex justify-content-start">
                        <input type="pnone" class="form-control @error('phone') is-invalid @enderror"  id="phone-number_2" style=" ">
                        <input type="hidden" name="code">
                    </div>
                    <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4" style="width: calc(100% - 0.0rem);margin-left: 0.0rem;"></textarea>
                        <label data-error="wrong" data-success="right" for="form8" style="margin-left: 0.0rem;">Ваше сообщение</label>
                    </div>
                    <button class="btn btn-texmart-orange text-white">Отправить<i class="fas fa-paper-plane-o ml-1"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')

    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/

        $("#phone-number_2").intlTelInput({
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
        $('#phone-number_2').on('focus', function(e) {
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

        $('#phone-number_2').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>
@endpush
