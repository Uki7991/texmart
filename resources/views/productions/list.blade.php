<div class="row">
    @foreach($productions as $production)

        <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
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
