@extends('layouts.app')

@section('content')

    @include('partials.promo')

    <div class="content">

        <div class="card-deck align-content-md-center">
            <div class="card border-0">
                <div class="card border-0 shadow-sm production-card transition-500">
                    <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="card border-0">
                <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>
            </div>
            <div class="card border-0">
                <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
            </div>
        </div>
        <div class="form-row text-center">
            <div class="col-12">
                <button type="button" class="btn btn-primary btn-lg shadow-lg">Large button</button>
            </div>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.left_sidebar')
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-12">
                        @include('productions.list')
                    </div>
                </div>
            </main>
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.right_sidebar')
            </div>
        </div>
    </div>
    <div>

    </div>


@endsection
