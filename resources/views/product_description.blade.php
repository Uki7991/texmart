@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="mt-xl-5 pt-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="first-dress-slider owl-carousel owl-theme">
                        <div class="item"><h4>1</h4></div>
                        <div class="item"><h4>2</h4></div>
                        <div class="item"><h4>3</h4></div>
                        <div class="item"><h4>4</h4></div>
                        <div class="item"><h4>5</h4></div>
                        <div class="item"><h4>6</h4></div>
                        <div class="item"><h4>7</h4></div>
                        <div class="item"><h4>8</h4></div>
                        <div class="item"><h4>9</h4></div>
                        <div class="item"><h4>10</h4></div>
                        <div class="item"><h4>11</h4></div>
                    </div>
                    <div class="second-dress-slider owl-carousel owl-theme">
                        <div class="item"><h4>1</h4></div>
                        <div class="item"><h4>2</h4></div>
                        <div class="item"><h4>3</h4></div>
                        <div class="item"><h4>4</h4></div>
                        <div class="item"><h4>5</h4></div>
                        <div class="item"><h4>6</h4></div>
                        <div class="item"><h4>7</h4></div>
                        <div class="item"><h4>8</h4></div>
                        <div class="item"><h4>9</h4></div>
                        <div class="item"><h4>10</h4></div>
                        <div class="item"><h4>11</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

    <script>
        var first = $('.first-dress-slider'),
            second = $('.second-dress-slider'),
            duration = 300,
            thumbs = 1,
            flag = true;

        first.on('click', '.owl-next', function () {
            second.trigger('next.owl.carousel')
        });
        first.on('click', '.owl-prev', function () {
            second.trigger('prev.owl.carousel')
        });

        // Start Carousel
        first.owlCarousel({
            // center : true,
            loop: true,
            items : 1,
            margin:0,
            nav : true,
            mouseDrag: true,
            navText : ["&lsaquo;","&rsaquo;"]
        })
            .on('dragged.owl.carousel', function (e) {
                if (e.relatedTarget.state.direction == 'left') {
                    second.trigger('next.owl.carousel')
                } else {
                    second.trigger('prev.owl.carousel')
                }
            });


        second.owlCarousel({
            // center: true,
            loop: true,
            items : thumbs,
            margin:10,
            nav : false,
        })
            .on('click', '.owl-item', function() {
                var i = $(this).index()-(thumbs);
                second.trigger('to.owl.carousel', [i, duration, true]);
                first.trigger('to.owl.carousel', [i, duration, true]);
            })
            .on('changed.owl.carousel', function (e) {
                console.log(e.item.index-thumbs);
                if (!flag) {
                    flag = true;
                    first.trigger('to.owl.carousel', [e.item.index-thumbs, duration, true]);
                    flag = false;
                }
            });

    </script>
@endpush
