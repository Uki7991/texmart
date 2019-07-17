@extends('layouts.app')

@section('content')

    @include('partials.promo')

    <div class="container my-5">
        <div class="row">
            @include('partials.feature')
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ route('register') }}" class="btn btn-danger rounded-0 btn-lg px-5 py-3 shadow-lg">Зарегистрируйтесь</a>
                <p class="small mt-2 text-center font-italic text-muted">Для подробной информации свяжитесь с нами</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center py-4">
            <main class="col-8">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="font-weight-bold text-underline">Продукции и цеха</h2>
                    </div>
                    <div class="col-12 mt-3">
                        @include('productions.list')
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <a href="{{ route('productions.index') }}" class="btn text-dark text-dotted rounded-0">Больше продукций...</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div>

    </div>


@endsection
