@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.left_sidebar')
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-12">
                        @include('productions.list')
                    </div>
                </div>
            </main>
            <div class="col-2 p-0 shadow-sm border rounded h-100">
                @include('partials.right_sidebar')
            </div>
        </div>
    </div>



@endsection
