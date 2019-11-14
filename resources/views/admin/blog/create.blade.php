@extends('admin.dashboard')

@section('dashboard_content')
    <form class="border container p-4 bg-white z-depth-1" action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title">{{ __('Название') }}</label>
                </div>
            </div>
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="price" name="excerpt" class="form-control">
                    <label for="price">{{ __('Описание') }}</label>
                </div>
            </div>
            <div class="col-6">
                <label>Выберите фото</label>
                <input type="file" name="logo">
            </div>
            <div class="col-12">
                <!-- Material input -->
                <div class="md-form">
{{--                    <input type="text" id="price" name="content" class="form-control">--}}
                    <textarea name="content" id="content_id" cols="30" rows="10" class="form-control richTextBox" style="height: 10px;"></textarea>
                </div>
            </div>

        </div>
        <button type="submit" title="{{ __('Создать') }}" class="bt n btn-success">{{ __('Создать') }}</button>
    </form>

@endsection

@push('scripts')
    <script src="{{asset('js/field.js')}}"></script>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endpush
