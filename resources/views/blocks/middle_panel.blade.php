<div class="container-fluid bg-img-header">
    <div class="row">
            <div class="col-6">
                <div class="pt-4 mb-5">
                    <img src="{{asset('img/logo 3.png')}}" class="img-fluid" alt="logo">
                </div>
                <div class="">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-white">
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                        <div class="item text-white">
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                        <div class="item text-white">
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <img src="{{asset('icons/icons_1.png')}}" class="mx-3" alt="advantages">
                    <img src="{{asset('icons/icons_2.png')}}" class="mx-3" alt="advantages">
                    <img src="{{asset('icons/icons_3.png')}}" class="mx-3" alt="advantages">
                </div>
            </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            items: 1,
            dots: true
        })
    </script>
@endpush
