@extends('profile.dashboard')

@section('profile_content')
    <section class="text-center blog-components">
        <h3 class="section-heading mb-5 h1">Объявления заказчиков</h3>
        <section class="my-5">
            <div class="media mt-4 px-1 text-md-left">
                <div class="media-body">
                    <h5 class="font-weight-bold mt-0">
                        <a href="">Danny Newman</a>
                    </h5>
                    <div class="application_for">
                        <div class="app_content">
                            <a href="#"></a>
                            <div class="app_top" style="display: flex;flex-wrap: nowrap;justify-content: space-between;">
                                <a href="{{ route('customer_list') }}"><p class="" style="margin: 0em 0">Куплю оптом дизайнерские носки оптом 500шт.</p></a>
                                <div class="">12.09.2019</div>
                            </div>
                            <div class="app_bottom">
                                <div class="app_category">
                                    <p class="application_text" style="margin: 0em 0">Женская одежда</p>
                                </div>
                                <div class="app_country">
                                    <img src="{{asset('img/flag.png')}}" alt="Флаг">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
