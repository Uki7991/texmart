@extends('layouts.app')

@section('content')
    @include('partials.header')
    <div class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="{{ asset('storage/'.$user->avatar) }}" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h1 class="text-capitalize">{{ $user->name }}</h1>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item bg-texmart-blue border">
                            <a href="#settings" class="nav-link text-light" id="settings-tab" data-toggle="tab" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="#favorite" class="nav-link text-light" id="favorite-tab" data-toggle="tab" role="tab" aria-controls="favorite" aria-selected="false">Favorite</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="#messages" class="nav-link text-light" id="messages-tab" data-toggle="tab" role="tab" aria-controls="messages" aria-selected="false">Message</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="#announce" class="nav-link text-light" id="announce-tab" data-toggle="tab" role="tab" aria-controls="announce" aria-selected="false">Мои обьявления</a>
                        </li>
                        <li class="nav-item bg-texmart-blue border">
                            <a href="#announce-create" class="nav-link text-light" id="announce-create-tab" data-toggle="tab" role="tab" aria-controls="announce-create" aria-selected="false">Подать обьявление</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <div class="tab-content">
                        @include('user-production.profile-tabs.settings')
                        @include('user-production.profile-tabs.messages')
                        @include('user-production.profile-tabs.favorite')
                        @include('user-production.profile-tabs.announce')
                        @include('user-production.profile-tabs.announce_create')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modals.message_modal')

@endsection

@push('styles')
{{--    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/selectize.default.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/standalone/selectize.min.js') }}"></script>
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script>
        $('#categories-multi').selectize({
            plugins: ['remove_button']
        });
        $('#categories-service').selectize({
        });
        $('#categories-product').selectize({
        });
    </script>
    @include('partials.scripts.favorite_click')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
@endpush
