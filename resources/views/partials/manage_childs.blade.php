<ul class="nav flex-column">
    @if(isset($input) && $input === true)
        @foreach($childs as $child)
            <li>
                @if(count($child->childs))
                    <i class="fas fa-plus"></i>
                    <a href="#{{ $child->title }}" class="text-dark">{{ $child->title }}</a>
                @else
                    <label class="m-0 p-0">
                        <input type="checkbox" name="categories[]" value="{{ $child->id }}" class="" data-id="{{ $child->id }}" data-title="{{ $child->title }}">
                        {{ $child->title }}
                    </label>
                @endif

                @if(count($child->childs))
                    @include('partials.manage_childs',['childs' => $child->childs, 'input' => true])
                @endif
            </li>
        @endforeach
    @else
        @foreach($childs as $child)
            <li>
                @if(count($child->childs))
                    <i class="fas fa-plus"></i>
                @endif
                <a href="#{{ $child->title }}" class="text-dark">{{ $child->title }}</a>
                @if(count($child->childs))
                    @include('partials.manage_childs',['childs' => $child->childs])
                @endif
            </li>
        @endforeach
    @endif
</ul>
