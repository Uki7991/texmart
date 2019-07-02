@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.left_sidebar')
            </div>
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col-5">
                            <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" class="img-fluid shadow-sm" alt="">

                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class="col-12">
                                    <h1 class="font-weight-bold h2">{{ $production->title }}</h1>
                                </div>

                                <div class="col-12 align-self-end">
                                    <div class="d-flex">
                                        @include('partials.btn.call')
                                        @include('partials.btn.favorite')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-5">
                            <div class="description">
                                {!! $production->description !!}
                            </div>
                        </div>

                        <div class="col-12 pt-3">
                            <h2 class="font-weight-light h4">Оборудование</h2>
                            <div class="tools">
                                <ul>
                                    <li>Швейная машина: maestro 13</li>
                                    <li>Закройная машина: model fr-12</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 pt-3">
                            <h2 class="font-weight-light h4">Галерея</h2>
                            <div class="gallery">
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                                <a href="">
                                    <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" height="30" width="auto" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
@endpush
