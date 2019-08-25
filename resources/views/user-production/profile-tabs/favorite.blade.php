<div class="tab-pane" id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
    <h1>Избранные</h1>
    @if(count(auth()->user()->favorites))
        <div class="container">
            <div class="row">
                @foreach(auth()->user()->favorite(\App\Production::class) as $production)
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-3">
                        @include('productions.single')
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
