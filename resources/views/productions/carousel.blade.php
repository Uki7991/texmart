<div class="productions owl-carousel owl-theme">
    @foreach($productions as $production)
        <div class="item">
            @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false, 'id' => $production->id])
        </div>
    @endforeach
</div>


