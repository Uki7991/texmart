@extends('layouts.app')

@section('title')
    Texmart - онлайн платформа
@endsection
@push('opengraph')
    <meta property="og:title" content="Texmart - онлайн платформа">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/1_AjogZeCnStQ8zJXAZPw4Pw.jpeg') }}">
    <meta property="og:url" content="{{ url() }}">
@endpush

@section('content')
    <div class="container">
        @include('blocks.side_panel')


    </div>
    {{--@include('partials.modals.10_seconds')--}}



    @include('blocks.middle_panel')
    @include('blocks.our_advantages')
    @include('blocks.partners')
    @include('blocks.footer')
{{--    @include('partials.modals.10_seconds')--}}
@endsection
