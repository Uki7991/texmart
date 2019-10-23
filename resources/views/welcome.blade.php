@extends('layouts.app')

@section('content')
    <div class="container">
        @include('blocks.side_panel')


    </div>
    {{--@include('partials.modals.10_seconds')--}}



    @include('blocks.middle_panel')
    @include('blocks.our_advantages')
    @include('blocks.partners')
    @include('blocks.footer')
    @include('partials.modals.10_seconds')
@endsection
