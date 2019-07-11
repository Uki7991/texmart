<div class="row">
    @foreach($productions as $production)

        <div class="col-sm-4 col-md-4 col-lg-4 mb-3">
            @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false])
        </div>

    @endforeach

</div>

@push('scripts')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
    @include('partials.scripts.production_card')
    @includeWhen(\Illuminate\Support\Facades\Auth::user(), 'partials.scripts.favorite_click')
@endpush
