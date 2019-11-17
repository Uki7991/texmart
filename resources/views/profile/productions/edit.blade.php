@extends('profile.dashboard')

@section('profile_content')
    @includeWhen($type == 'productions', 'profile.productions.edit.productions')
    @includeWhen($type == 'service', 'profile.productions.edit.service')
    @includeWhen($type == 'product', 'profile.productions.edit.product')
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>

@endpush
