@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col-4">
                            <div class="card bg-dark text-white border-0 shadow position-relative d-flex" style="background-image: url('{{ asset('img/geografia-perevozok.jpg') }}'); background-size: cover; min-height: 200px;">
                                <div class="backdrop"></div>
                                <div class="card-img-overlay d-flex align-items-end text-white h-100" style="z-index: 9;">
                                    <h5 class="card-title font-weight-bold">Card title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
