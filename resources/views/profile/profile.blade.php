@extends('profile.dashboard')

@section('profile_content')
    <section id="blog-components" class="text-center" data-step="2" data-intro="Здесь вы можете просматривать топ 10 объявлений от закзачиков!">
        <h3 class="section-heading mb-5 h1">Объявления заказчиков</h3>
        <section class="my-5">
            <div class="media mt-4 px-1 text-md-left">
                <img class="card-img-100 d-flex z-depth-1 mr-3" src="{{ asset('img/logo.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="font-weight-bold mt-0">
                        <a href="">Danny Newman</a>
                    </h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consectetur accusamus velit nostrum et magnam.
                </div>
            </div>
        </section>
    </section>
@endsection
