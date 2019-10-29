<ul class="btn-submit-your-application father">
    <li>
        <a href="" class="form-call d-md-block d-none">
            <img src="{{asset('icons/submit_your_application.png')}}" class="icon_form" alt="оставить заявку">
        </a>
        <ul class=" btn-submit-your-application-child">
            <li>
                <a href="">оставить заявку</a>
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
