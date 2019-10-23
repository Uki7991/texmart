@extends('layouts.app')

@section('content')
    <div class="container">
        @include('blocks.side_panel')
    </div>
    <div class="container-fluid">
        @include('blocks.middle_panel')
    </div>

{{--    @include('partials.modals.10_seconds')--}}
@endsection
