<a href="{{ $route ?? '#' }}" {{ $data ?? '' }} class="{{ isset($bootstrap3) && $bootstrap3 ? 'btn-danger' : '' }} text-danger mx-1 favorite transition-100 {{ $class ?? '' }}">
    <i class="{{ $production->isFavorited() ? 'fas' : 'far' }} fa-heart text-juice"></i>
</a>
