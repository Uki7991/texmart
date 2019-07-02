@extends('layouts.app')

@section('content')
    <div class="container bg-info">
        <div class="row">
            <div class="col-3">
                @include('partials.left_sidebar')
            </div>
            <div class="col">
                <h1>HGello</h1>
            </div>
        </div>
    </div>
@endsection
