<ul class="nav flex-column">
    @if(isset($input) && isset($input[0]) && $input[0] === true)
        @foreach($childs as $child)
            <li>
                @if(count($child->childs))
                    <i class="fas fa-plus"></i>
                    <a href="#{{ $child->title }}" class="text-dark">{{ $child->title }}</a>
                @else
                    @if(isset($production))
                        @php($found = false)
                        @foreach($production->categories as $cat)
                            @if($cat->id == $child->id)
                                @php($found = true)
                                @break
                            @endif
                        @endforeach
                        <label class="m-0 p-0">
                            <input type="{{ $input[1] }}" name="categories[]" value="{{ $child->id }}" class="" data-id="{{ $child->id }}" data-title="{{ $child->title }}" {{ $found ? 'checked' : '' }}>
                            {{ $child->title }}
                        </label>
                    @else
                        <label class="m-0 p-0">
                            <input type="{{ $input[1] }}" name="categories[]" value="{{ $child->id }}" class="" data-id="{{ $child->id }}" data-title="{{ $child->title }}">
                            {{ $child->title }}
                        </label>
                    @endif
                @endif

                @if(count($child->childs))
                    @include('partials.manage_childs',['childs' => $child->childs->sortBy('order'), 'input' => [true, $input[1]]])
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
                    @include('partials.manage_childs',['childs' => $child->childs->sortBy('order')])
                @endif
            </li>
        @endforeach
    @endif
</ul>
