@extends('profile.dashboard')

@section('profile_content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h2>Объявления</h2>
            </div>
            <div class="col-auto">
                <a href="{{ route('profile.announce.create') }}" class="btn btn-success">Создать</a>
            </div>
        </div>
        <div class="row">
            @forelse($announces as $announce)
                <div class="col-6">
                    <div class="media mt-4 px-1 text-md-left">
                        <a title="{{ $announce->title }}" href="{{ route('announce.show', $announce) }}" class="media-body text-dark hoverable rounded-circle">
                            <div class="application_for">
                                <div class="app_content">
                                    <div class="app_top" style="display: flex;flex-wrap: nowrap;justify-content: space-between;">
                                        <p class="" title="{{ $announce->content }}" style="margin: 0em 0">{{ \Illuminate\Support\Str::limit($announce->content, 50) }}</p>
                                        <div class="">{{ \Carbon\Carbon::make($announce->created_at)->format('d.m.Y') }}</div>
                                    </div>
                                    <div class="app_bottom">
{{--                                        <div class="app_category">--}}
{{--                                            <p class="application_text" style="margin: 0em 0">Женская одежда</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="app_country">--}}
{{--                                            <img src="{{asset('img/flag.png')}}" alt="Флаг">--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <h3>Нет объявлений</h3>
            @endforelse
        </div>
    </div>
@endsection
