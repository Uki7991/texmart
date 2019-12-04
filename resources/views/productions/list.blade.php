<div class="row">
    @foreach($productions as $production)

        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3 pt-1 px-0 px-md-2">
            @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false])
        </div>

    @endforeach

</div>

@push('scripts')
{{--    @include('partials.scripts.favorite_btn')--}}
{{--    @include('partials.scripts.call_btn')--}}
{{--    @include('partials.scripts.production_card')--}}
{{--    @includeWhen(\Illuminate\Support\Facades\Auth::user(), 'partials.scripts.favorite_click')--}}
@endpush
