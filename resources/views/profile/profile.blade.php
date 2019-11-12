@extends('profile.dashboard')

@section('profile_content')
    <section class="text-center blog-components">
        <h3 class="section-heading mb-5 h1">Объявления заказчиков</h3>
        <section class="my-5">
            <div class="media mt-4 px-1 text-md-left">
                <img class="card-img-100 d-flex z-depth-1 mr-3" src="{{ asset('img/logo.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="font-weight-bold mt-0">
                        <a href="">Danny Newman</a>
                    </h5>
                    <div class="block-customer">
                        <div class="date-customer">12.09.2019</div>
                        <h1 class="customer-title" style="font-size: 1.5rem">Куплю ткани для оптового закупа. Особенно
                            интересуют трикотаж, лён, кашемир. Интересует
                            также женская одежда и обувь</h1>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
