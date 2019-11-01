@extends('layouts.app')

@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>

    <section class=" mt-5 pt-5">
        <div class="container">
            <div class="row">

                <div class="col-3">

                </div>

                <div class="col-6">
                    <section id="blog-components" class="text-center">

                        <!--Section heading-->
                        <h3 class="section-heading mb-5 h1">Author Box</h3>


                        <!--Section: Author Box-->
                        <section class="my-5">



                            <div class="media mt-4 px-1 text-md-left">
                                <img class="card-img-100 d-flex z-depth-1 mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="font-weight-bold mt-0">
                                        <a href="">Danny Newman</a>
                                    </h5>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consectetur accusamus velit nostrum et magnam.
                                </div>
                            </div>

                        </section>
                        <!--Section: Author Box-->

                    </section>
                </div>
                <div class="col-3">
                    <!-- Card -->
                    <div class="card mb-5">

                        <!-- Card image -->
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Card title</a></h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-primary">Button</a>

                        </div>

                    </div>
                    <!-- Card -->
                    <div class=" my-5">
                        <canvas id="myChart"></canvas>
                    </div>

                    <ul class="list-inline border shadow rounded py-2 px-2">
                        <li class="list-inline-item  my-2">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('img/user-logo.jpg') }}" class="w-25 rounded-circle" alt="">
                                <p class="ml-2">
                                    Lorem ipsum
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item  my-2">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('img/user-logo.jpg') }}" class="w-25 rounded-circle" alt="">
                                <p class="ml-2">
                                    Lorem ipsum
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item  my-2">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('img/user-logo.jpg') }}" class="w-25 rounded-circle" alt="">
                                <p class="ml-2">
                                    Lorem ipsum
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item  my-2">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('img/user-logo.jpg') }}" class="w-25 rounded-circle" alt="">
                                <p class="ml-2">
                                    Lorem ipsum
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item  my-2">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('img/user-logo.jpg') }}" class="w-25 rounded-circle" alt="">
                                <p class="ml-2">
                                    Lorem ipsum
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
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
@endpush
