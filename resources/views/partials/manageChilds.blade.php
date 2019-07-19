<ul class="nav">
    @if(isset($input) && $input === true)
        @foreach($childs as $child)
            <li>
                @if(count($child->childs))
                    <i class="fas fa-plus"></i>
                @endif
                    <label>
                        <input type="checkbox" class="">
                        {{ $child->title }}
                    </label>
                @if(count($child->childs))
                    @include('manageChild',['childs' => $child->childs])
                @endif
            </li>
        @endforeach
    @else
        @foreach($childs as $child)
            <li>
                @if(count($child->childs))
                    <i class="fas fa-plus"></i>
                @endif
                <a href="#" class="text-dark">{{ $child->title }}</a>
                @if(count($child->childs))
                    @include('manageChild',['childs' => $child->childs])
                @endif
            </li>
        @endforeach
    @endif
</ul>
