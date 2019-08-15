@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorum et eveniet, ex minus nemo
                        obcaecati odio odit, provident quasi sapiente sit temporibus tenetur ut velit, veniam voluptate!
                        Aut cum doloribus laboriosam natus suscipit? Fugit iure labore perspiciatis sequi tenetur!</p>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi placeat vero vitae! Alias consequuntur enim, facilis ipsam suscipit vel! Aspernatur at cum cumque dicta, dolore enim fuga laudantium minima nemo nulla odit praesentium ratione rerum saepe tempora? Aspernatur, autem, consectetur culpa dolore eaque fugiat harum inventore ipsa iste modi perspiciatis placeat porro quae quia quo saepe suscipit voluptatem. Aliquid enim libero molestiae voluptate? Beatae minus, suscipit. Animi illum, modi.</p>
                </div>
                <div class="map_yandex">
                    <div id="map" style="width: 1500px; height: 450px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3be2944d49ae2954e7c74368b8f8711c94482ca45a0e40b38a169930c4bb8df2&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

@endpush
