<form action="{{ $route ?? '#' }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-danger shadow-sm rounded-pill {{ $class ?? '' }}">
        <i class="fas fa-trash"></i>
    </button>
</form>
