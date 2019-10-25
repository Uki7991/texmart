<div class="container">
    <h2 class="mb-5" style="color:#CD882D ">Заявки от заказчиков </h2>
    <div class="row col-12">
            <div class=" col-3 slider">
                <div><img src="http://placehold.it/96.png" alt=""></div>
                <div><img src="http://placehold.it/96.png" alt=""></div>
                <div><img src="http://placehold.it/96.png" alt=""></div>
                <div><img src="http://placehold.it/96.png" alt=""></div>
                <div><img src="http://placehold.it/96.png" alt=""></div>
                <div><img src="http://placehold.it/96.png" alt=""></div>
            </div>
        <div class="col-9">

        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
@endpush
@push('scripts')
    <script>
        $(document).ready(function () {
            // slick carousel
            $('.slider').slick({
                dots: true,
                vertical: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                verticalSwiping: true,
            });
        });
    </script>
@endpush
