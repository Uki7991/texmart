@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col-4">
                            <div class="card bg-dark text-white border-0 shadow">
                                <img src="{{ asset('img/geografia-perevozok.jpg') }}" class="card-img" alt="...">
                                <div class="card-img-overlay text-dark">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="m-0 p-0" class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
