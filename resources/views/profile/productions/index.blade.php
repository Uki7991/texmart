@extends('profile.dashboard')

@section('profile_content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h2>Объявления</h2>
            </div>
            <div class="col-auto">
                <a href="{{ route('profile.production.create', ['type' => $type]) }}" class="btn btn-success">Создать</a>
            </div>
        </div>
        <div class="row">
            @forelse($productions as $production)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            {{ $production->title }}
                        </div>
                    </div>
                </div>
            @empty
                <h3>Нет объявлений</h3>
            @endforelse
        </div>
    </div>
@endsection
