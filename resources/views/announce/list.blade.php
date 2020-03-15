@foreach($announces as $announce)
    <div class="item_slider">
        <div class="application_for">
            <div class="app_content">
                <div class="app_top">
                    <a class="text-dark" href="{{ route('announce.show', $announce) }}">
                        <p class="m-0" title="{{ $announce->content }}">
                            {{ \Illuminate\Support\Str::limit($announce->content, 150) }}
                        </p>
                    </a>
                </div>
                <div class="app_bottom">
                    <div class="app_category">
                        {{ \Carbon\Carbon::make($announce->created_at)->format('d.m.Y') }}
                        {{--                                    <p class="application_text m-0">Женская одежда</p>--}}
                    </div>
                    {{--                                <div class="app_country">--}}
                    {{--                                    <img src="{{asset('img/flag.png')}}" alt="Флаг">--}}
                    {{--                                </div>--}}
                </div>
            </div>
        </div>
    </div>
@endforeach
