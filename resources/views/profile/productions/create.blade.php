@extends('profile.dashboard')

@section('profile_content')
    @includeWhen($type == 'productions', 'profile.productions.create.productions')
    @includeWhen($type == 'service', 'profile.productions.create.service')
    @includeWhen($type == 'product', 'profile.productions.create.product')
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>

@endpush
