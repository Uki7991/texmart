<a href="{{ $route ?? '#' }}" {{ $data ?? '' }} class="btn {{ isset($bootstrap3) && $bootstrap3 ? 'btn-danger' : '' }} border border-dark shadow-sm rounded-pill mx-1 favorite transition-100 {{ $class ?? '' }}">
    В избранное <i class="{{ $production->isFavorited() ? 'fas' : 'far' }} fa-star text-warning"></i>
</a>
