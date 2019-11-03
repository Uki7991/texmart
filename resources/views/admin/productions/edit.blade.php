@extends('admin.layouts.dashboard')

@section('dashboard_content')
    @includeWhen($type == 'productions', 'admin.productions.create.production')
    @includeWhen($type == 'service', 'admin.productions.create.service')
    @includeWhen($type == 'product', 'admin.productions.create.product')
@endsection
