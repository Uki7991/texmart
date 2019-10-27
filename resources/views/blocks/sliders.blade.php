<div class="container my-5">
    <h3 class="text-orange" style="color: #e99b33 !important;">
        Производственные цеха и фабрики
    </h3>
    <div class="row justify-content-center">

        <div id="owl-one" class="owl-carousel owl-theme col-12">
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5 ">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">

                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>
            <div class="item">
                <img src="{{ asset('images/slider1.png') }}" alt="">

                <div class="mr-5">
                    <span class="sprite-email waves-effect waves-light"></span>
                    <span class="sprite-email waves-effect waves-light"></span>
                </div>
                <p class="ml-5">

                </p>
            </div>

        </div>
    </div>
    <div class="row">



        <div id="owl-two" class="owl-carousel owl-theme col-12">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
        </div>
    </div>
    <div class="row">
        <div id="owl-three" class="owl-carousel owl-theme col-12">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#owl-one').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            touchDrag: true,
            responsive:{
                0:{
                    items:1
                },
                600 :{
                    items:3
                },
                1000:{
                    items:4
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        })
        $('#owl-two').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            touchDrag: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        })
        $('#owl-three').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            touchDrag: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        })

    </script>
@endpush
