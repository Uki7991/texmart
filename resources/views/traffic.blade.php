@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0">
                @include('partials.left_sidebar')
            </div>
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col">
                            <h2>Перевозки</h2>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at
                                cum cupiditate earum eius esse eveniet facere fugiat harum illum laborum, libero
                                molestias mollitia pariatur quisquam, repudiandae sapiente vitae voluptates.</p>
                            <div class="col-lg-12">
                                <img src="{{ asset('storage/img/geografia-perevozok.jpg') }}" class="img-fluid shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
