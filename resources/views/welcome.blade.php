@extends('layouts.app')

@section('content')
    <div class="container">
        @include('blocks.side_panel')


    </div>
    {{--@include('partials.modals.10_seconds')--}}


    <div class="container-fluid">
        @include('blocks.middle_panel')
    </div>
    @include('blocks.partners')
    @include('blocks.footer')
{{--    @include('partials.modals.10_seconds')--}}
@endsection
