<div class="row">
    @foreach($productions as $production)

        <div class="col-4 mb-3">
            @include('productions.single')
        </div>

    @endforeach

</div>

@push('scripts')
    @include('partials.scripts.favorite_btn')
    @include('partials.scripts.call_btn')
    @include('partials.scripts.production_card')
@endpush
