<div class="tab-pane" id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
    <h1>Favorites</h1>
    <div class="container">
        <div class="row">
            @foreach(auth()->user()->favorite(\App\Production::class) as $production)
                <div class="col-3">
                    @include('productions.single')
                </div>
            @endforeach
        </div>
    </div>
</div>