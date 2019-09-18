@extends('user-production.profile')

@section('office')
    <div class="tab-pane" id="announce" role="tabpanel" aria-labelledby="announce-tab">
        <h1>Мои обьявления</h1>

        <div class="container">
            <div class="row">
                @foreach($productions as $production)
                    <div class="col-12 col-sm-6 col-md-4 col-xl-4 mb-3">
                        @include('productions.single', ['profile' => true])
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
