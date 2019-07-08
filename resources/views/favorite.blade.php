@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-4">
            <div class="col-12">
                @if($productions)
                    @include('productions.list')
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
