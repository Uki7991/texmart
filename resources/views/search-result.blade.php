@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container py-5">
        <div class="row pt-5">
            <h2>Результаты поиска</h2>
        </div>
        <div class="row">
            @foreach($result as $key => $items)
                <div class="col-12">
                    @if(count($items))
                        <a class="nav-link bg-grey-light font-weight-bold  h1 text-dark mt-2 py-0 disabled" href="#" tabindex="-1" aria-disabled="true">{{ $key }}</a>
                    @endif
                </div>

                @foreach($items as $production)
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-3">
                            @include('productions.single')
                        </div>
                @endforeach
            @endforeach
        </div>
    </div>
@stop
