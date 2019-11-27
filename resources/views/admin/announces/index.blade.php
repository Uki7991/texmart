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
            <th>{{ __('Контент') }}</th>
            <th>{{ __('Телефон') }}</th>
            <th>Created At</th>
            <th>Действия</th>
        </tr>
        </thead>
    </table>
    @include('partials.modals.delete_modal')

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
                ajax: '{!! route('admin.announce.datatable') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'content', name: 'content' },
                    { data: 'user.phone', name: 'user.phone' },
                    { data: 'created_at', name: 'created_at', searchable: false },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
    <script>
        $('#delete-confirmation').on('show.bs.modal', function (e) {
            let btn = $(e.relatedTarget);
            $('#delete-confirmation').find('form').attr('action', btn.attr('href'));
        })
    </script>
@endpush
