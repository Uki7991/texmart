<div class="card border shadow-sm production-card transition-500">
    <a href="{{ route('productions.show', $production->slug) }}" class="text-dark text-decoration-none">
        <div class="card-img-top position-relative text-center">
            <img src="{{ $production->logo && file_exists('storage/'.$production->logo) ? asset('storage/'.$production->logo) : asset('img/2 lg.jpg') }}" class="img-fluid img-responsive height-carusel" alt="">
        </div>
        <div class="card-body pb-0">
            <h6 class="font-weight-bold card-title">{{ Str::limit($production->title ?? 'ОсОО "Швея на час"', 18) }}</h6>
{{--            <p class="card-text">--}}
{{--                {{ Str::limit($production->excerpt ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum cumque dignissimos eligendi, est hic impedit iure laboriosam laudantium molestiae, molestias nulla odit quae quaerat quibusdam recusandae repellendus tempora voluptatem.', 80, '...') }}--}}
{{--            </p>--}}
        </div>
        <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0">
{{--            <div class="mr-auto">--}}
{{--                <p class="m-0 p-0 small text-muted font-italic font-weight-bold">+996 700 700 700</p>--}}
{{--            </div>--}}
            <p class="m-0 small">
                <i class="fas fa-eye fa-sm"></i>&nbsp;<span class="">{{ $production->views }}</span>
            </p>

            <div class="ml-auto d-flex align-items-center">
                @include('partials.btn.call', ['class' => 'btn-sm'])
                @include('partials.btn.favorite', ['class' => 'btn-sm', 'data' => 'data-id='.$production->id.'', 'route' => \Illuminate\Support\Facades\Auth::user() ? '#' : route('login')])
            </div>
        </div>
    </a>
    @if(isset($profile) && auth()->check())
        <div class="card-footer">
            <div class="d-flex">
                @includeWhen(isset($profile) && auth()->check() && auth()->id() == $production->user->id, 'partials.btn.edit', ['route' => route('productions.edit', $production)])
                @includeWhen(isset($profile) && auth()->check() && auth()->id() == $production->user->id, 'partials.btn.delete', ['route' => route('productions.destroy', $production)])
            </div>
        </div>
        <div class="card-footer">
            @if($production->type == 'productions')
                <p class="m-0">Производство</p>
            @endif
            @if($production->type == 'service')
                <p class="m-0">Услуга</p>
            @endif
            @if($production->type == 'product')
                <p class="m-0">Товар</p>
            @endif
        </div>
    @endif

</div>
