@extends('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/eb6e8d4dc3.js"></script>
@stop

@section('content')
    <div class="container">
        <div class="row py-4">
            <div class="col-md-12">
                @if($productions)
                    @include('productions.list', ['bootstrap3' => true])
                @else
                    <div class="text-center py-5">
                        <h5>Избранных производителей нет</h5>
                        <p class="small">Добавьте в избранное</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    @include('partials.scripts.favorite_click')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
@stop
