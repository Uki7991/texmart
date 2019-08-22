@foreach($childs as $cat)
    @if(count($cat->childs) > 0)
        <optgroup label="     {{ $cat->title }}"  class="collapse collapse-multi" id="multiCollapse{{ $cat->id }}" data-toggle="collapse" data-target="#multiCollapse{{ $cat->id }}" aria-expanded="false" aria-controls="multiCollapse{{ $cat->id }}">
            @include('user-production.partials.manageChildsSelect', ['childs' => $cat->childs])
        </optgroup>
    @else
        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
    @endif
@endforeach
