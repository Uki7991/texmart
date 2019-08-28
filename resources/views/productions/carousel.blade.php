@if(count($productions) > 4)
    <div class="{{ count($productions) > 4 ? 'productions' : '' }} owl-carousel owl-theme">
        @foreach($productions as $production)
            <div class="item">
                @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false, 'id' => $production->id])
            </div>
        @endforeach
    </div>
@else
    @foreach($productions as $production)
        <div class="col-12 col-sm-6 col-md-4 col-xl-3">
            @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false, 'id' => $production->id])
        </div>
    @endforeach
@endif
