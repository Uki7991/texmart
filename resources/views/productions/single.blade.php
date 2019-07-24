<div class="card border-0 shadow-sm production-card transition-500">
    <a href="{{ route('productions.show', $production->slug) }}" class="text-dark text-decoration-none">
        <div class="card-img-top position-relative">
            <img src="{{ asset('img/2 lg.jpg') }}" class="img-fluid img-responsive" alt="">
        </div>
        <div class="card-body pb-0">
            <h6 class="font-weight-bold card-title">{{ Str::limit($production->title ?? 'ОсОО "Швея на час"', 18) }}</h6>
{{--            <p class="card-text">--}}
{{--                {{ Str::limit($production->excerpt ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum cumque dignissimos eligendi, est hic impedit iure laboriosam laudantium molestiae, molestias nulla odit quae quaerat quibusdam recusandae repellendus tempora voluptatem.', 80, '...') }}--}}
{{--            </p>--}}
        </div>
        <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0">
            @include('partials.btn.call', ['class' => 'btn-sm'])
            @include('partials.btn.favorite', ['class' => 'btn-sm', 'data' => 'data-id='.$production->id.'', 'route' => \Illuminate\Support\Facades\Auth::user() ? '#' : route('login')])
        </div>
    </a>
</div>
