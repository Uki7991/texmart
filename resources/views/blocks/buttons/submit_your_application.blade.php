@include('blocks.buttons.button_request')

<ul class="list-unstyled  btn-submit-your-application d-md-block none father" data-toggle="modal">
    <li>
        <a href="#" class="form-call">
            <img src="{{asset('icons/submit_your_application.png')}}" class="icon_form" alt="оставить заявку">
        </a>
        <ul class="list-unstyled btn-submit-your-application-child">
            <li>
                <a href="" data-toggle="modal" data-target="#modalContactForm">оставить заявку</a>
            </li>
        </ul>
    </li>
</ul>

@push('scripts')
    <script>
        $('.btn-submit-your-application').hover(function () {
            $('.btn-submit-your-application-child').addClass('active');
            $('.btn-submit-your-application-child').addClass('animated slideInRight');
        },function () {
            $('.btn-submit-your-application-child').removeClass('active animated slideInRight');
        });

    </script>
@endpush
