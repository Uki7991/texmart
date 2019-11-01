@extends('admin.layouts.admin')

@section('admin_content')
    @include('admin.partials.navbar')

    @yield('dashboard_content')
@endsection
