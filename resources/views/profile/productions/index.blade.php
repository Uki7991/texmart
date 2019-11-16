@extends('profile.dashboard')

@section('profile_content')
    <div class="container">
        <div class="row mb-4 justify-content-between">
            <div class="col-auto">
                <h1>Мои объявления</h1>
            </div>
        </div>
    </div>

    <div class="container shadow-lg pt-5 px-4 rounded">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Производственные цеха</h2>
            </div>
            @forelse($productions as $production)
                <div class="col-3">
                    @include('productions.single', ['production' => $production])
                </div>
            @empty
                <div class="col-12">
                    <h3 class="ml-3">Нет объявлений</h3>
                </div>
            @endforelse
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <h2>Товары</h2>
            </div>
            @forelse($products as $product)
                <div class="col-3">
                    @include('productions.single', ['production' => $product])
                </div>
            @empty
                <div class="col-12">
                    <h3 class="ml-3">Нет объявлений</h3>
                </div>
            @endforelse
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <h2>Услуги</h2>
            </div>
            @forelse($services as $service)
                <div class="col-3">
                    @include('productions.single', ['production' => $service])
                </div>
            @empty
                <div class="col-12">
                    <h3 class="ml-3">Нет объявлений</h3>
                </div>
            @endforelse
        </div>
    </div>
@endsection
