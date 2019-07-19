<ul>
    @foreach($childs as $child)
        <li>
            @if(count($child->childs))
                <i class="fas fa-plus"></i>
            @endif
            {{ $child->title }}
            @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
