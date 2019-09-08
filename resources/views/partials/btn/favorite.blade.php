<a href="{{ $route ?? '#' }}" {{ $data ?? '' }} class="btn {{ isset($bootstrap3) && $bootstrap3 ? 'btn-danger' : '' }} shadow-sm rounded-pill mx-1 favorite transition-100 {{ $class ?? '' }}">
    <i class="{{ $production->isFavorited() ? 'fas' : 'far' }} fa-heart text-juice"></i>
</a>
