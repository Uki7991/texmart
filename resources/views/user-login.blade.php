@extends('layouts')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">

                </div>

                <div class="col-9">
                    <!-- Card -->
                    <div class="card border-0 border-left">

                        <!-- Card image -->
                        <img class="card-img-left" src="{{ asset('img/user-logo.jpg') }}" alt="Card image cap">

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
                </div>
            </div>
        </div>
    </section>

@endsection

