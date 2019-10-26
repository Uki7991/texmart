<div class="container">
    <div class="row">
        <div class="col-12 slider">
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>





            </div>
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>




            </div>
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>




            </div>
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>




            </div>
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>




            </div>
            <div class="col-3">
                <img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="">
                <a href="">

                </a>
                <a href="">

                </a>




            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            touchMove: false,
        });

    </script>
@endpush
