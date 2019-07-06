@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container bg-white py-3">
                    <div class="row">
                        <div class="col-12">

                            <h1>Новости</h1>
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

                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <span class="text-underline mr-3">Категории</span>
                            <span class="text-underline mr-3">Категории</span>
                            <span class="text-underline mr-3">Категории</span>
                            <span class="text-underline mr-3">Категории</span>
                            <span class="text-underline mr-3">Категории</span>
                        </div>
                        <div class="col-6">
                            @include('posts.list')
                        </div>
                        <div class="col-6">
                            @include('posts.list')
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
