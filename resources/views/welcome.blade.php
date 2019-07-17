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
                <button type="button" class="btn btn-danger rounded-0 btn-lg px-5 py-3 shadow-lg">Зарегистрируйтесь</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.left_sidebar')
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-12">
                        @include('productions.list')
                    </div>
                </div>
            </main>
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.right_sidebar')
            </div>
        </div>
    </div>
    <div>

    </div>


@endsection
