@extends('user-production.profile')

@section('office')
    <div class="tab-pane" id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
        <p class="h1">Избранные</p>
        @if(count(auth()->user()->favorites))
            <div class="container">
                <div class="row">
                    @foreach(auth()->user()->favorite(\App\Production::class) as $production)
                        <div class="col-12 col-sm-6 col-md-4 col-xl-4 mb-3">
                            @include('productions.single')
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
