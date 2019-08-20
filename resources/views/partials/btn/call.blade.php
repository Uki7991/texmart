<a href="{{ $route ?? '#' }}" data-id="{{ $id ?? null }}" class="btn {{ isset($bootstrap3) && $bootstrap3 ? 'btn-primary' : '' }} shadow-sm rounded-pill mx-1 call-btn transition-100 {{ $class ?? '' }}" data-toggle="modal" data-target="#callToProduction">
    <i class="fas fa-envelope text-success"></i>
</a>
