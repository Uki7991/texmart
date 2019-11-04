@extends('admin.layouts.dashboard')

@section('dashboard_content')
    @includeWhen($type == 'productions', 'admin.productions.create.production')
    @includeWhen($type == 'service', 'admin.productions.create.service')
    @includeWhen($type == 'product', 'admin.productions.create.product')
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>

@endpush
