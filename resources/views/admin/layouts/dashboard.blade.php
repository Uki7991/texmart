@extends('admin.layouts.admin')

@section('admin_content')
    @include('admin.partials.navbar')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-3 pl-0">
                @include('admin.partials.sidebar')
            </div>
            <div class="col">
                @yield('dashboard_content')
            </div>
        </div>
    </div>
@endsection
