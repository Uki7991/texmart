@extends('layouts.app')

@section('content')

    @include('partials.header', ['shadow' => 'shadow'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-2">
                @include('partials.left_sidebar')
            </div>
            <div class="col">
                @include('productions.list')
            </div>
            <div class="col-2">
                @include('partials.right_sidebar')
            </div>
        </div>
    </div>

@stop
