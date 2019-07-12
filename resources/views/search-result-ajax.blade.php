<nav class="nav flex-column">
    @foreach($result as $key => $items)
        @if(count($items))
            <a class="nav-link bg-grey-light font-weight-bold  mt-2 py-0 disabled" href="#" tabindex="-1" aria-disabled="true">{{ $key }}</a>
        @endif

        @foreach($items as $value)
            $value instanceof \App\
                <a class="nav-link py-0" href="{{ route('doctor.show', $value->id) }}">{{ $value->fullName }}</a>
        @endforeach
    @endforeach


</nav>
