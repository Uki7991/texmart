@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col-4">
                            <div class="card bg-dark text-white border-0 shadow position-relative d-flex"
                                 style="background-image: url('{{ asset('img/geografia-perevozok.jpg') }}'); background-size: cover; min-height: 200px;">
                                <div class="backdrop"></div>
                                <div class="card-img-overlay d-flex align-items-end text-white h-100"
                                     style="z-index: 9;">
                                    <h5 class="card-title font-weight-bold">Card title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-5">
                            <div class="card shadow my-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/basic.jpg') }}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="card-group">
                                <div class="card">
                                    <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This card has even longer content
                                            than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
