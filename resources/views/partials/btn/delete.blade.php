<form action="{{ $route ?? '#' }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-danger btn-sm px-3 py-1 px-md-4 py-md-2 shadow-sm rounded-pill {{ $class ?? '' }}">
        <i class="fas fa-trash"></i>
    </button>
</form>
