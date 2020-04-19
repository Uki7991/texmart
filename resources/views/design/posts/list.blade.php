<div class="row row-cols-{{ $rowCols }}">
    @for($i = 0; $i < $count; $i++)
        <div class="col">
            @include('design.posts.card')
        </div>
    @endfor
</div>
