@extends('layouts.app')

@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>

    <div class="container-fluid pt-5">
        <div class="row pt-5 align-items-center">
            <div class="col-2">
                <img class="img-fluid" src="{{ asset('storage/'. auth()->user()->avatar) }}" alt="">
            </div>
            <div class="col-auto">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-3 d-none d-lg-block">
                @include('profile.partials.sidebar')
            </div>
            <div class="col">
                @yield('profile_content')
            </div>
            @if(request()->is('profile/dashboard*'))
                <div class="col-3">
                    @include('profile.partials.right-sidebar')
                </div>
            @endif
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    <script>
        $('#clickLogin').click(function (e) {
            e.preventDefault();
            $('#sidebar').addClass('d-block animate fadeInDown');
        })
    </script>
    <script>
        introJs().start();
    </script>
@endpush
