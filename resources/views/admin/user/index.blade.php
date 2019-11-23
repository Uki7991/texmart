@extends('admin.layouts.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.user.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="products-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>{{ __('Название') }}</th>
            <th>{{ __('Телефон') }}</th>
            <th>{{ __('Код верификации') }}</th>
            <th>Created At</th>
        </tr>
        </thead>
    </table>

@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#products-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.user.datatable') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'phone', name: 'phone' },
                    { data: 'phone_verification', name: 'phone_verification' },
                    { data: 'created_at', name: 'created_at' },
                ]
            });
        });
    </script>
@endpush
