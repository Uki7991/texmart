<div class="card border-0 shadow-sm production-card transition-500">
    <a href="{{ route('productions.show', $production->slug) }}" class="text-dark text-decoration-none">
        <div class="card-img-top">
            <img src="{{ asset('storage/img/16-9-dummy-image6.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="card-body">
            <h6 class="font-weight-bold card-title">{{ Str::limit($production->title ?? 'ОсОО "Швея на час"', 18) }}</h6>
            <p class="card-text">
                {{ Str::limit($production->excerpt ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum cumque dignissimos eligendi, est hic impedit iure laboriosam laudantium molestiae, molestias nulla odit quae quaerat quibusdam recusandae repellendus tempora voluptatem.', 80, '...') }}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-around">
            @include('partials.btn.call', ['class' => 'btn-sm'])
            @include('partials.btn.favorite', ['class' => 'btn-sm', 'data' => 'data-id='.$production->id.'', 'route' => \Illuminate\Support\Facades\Auth::user() ? '#' : route('login')])
        </div>
    </a>
</div>
