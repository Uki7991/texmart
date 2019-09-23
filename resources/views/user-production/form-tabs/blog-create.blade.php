@extends('user-production.profile')

@section('office')
    <div class="tab-pane" id="product-create" role="tabpanel" aria-labelledby="">
        <h1>Добавление статьи</h1>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                    <form action="{{ route('productions.store') }}" enctype="multipart/form-data" method="POST">
                        @if($errors->any())
                            <span class="invalid-feedback d-block">
                                <strong>У вас есть ошибки при заполнении</strong>
                            </span>
                        @endif
                        @csrf
                        <input type="hidden" name="type" value="">
                        <div class="form-group">
                            <label>
                                Название статьи <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control @error('title') 'is-invalid' @enderror"
                                   value="{{ old('title') }}" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label>
                                Лицевая картинка <span class="text-danger">*</span>
                            </label>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                Категории <span class="text-danger">*</span>
                            </label>
                            <select class="selectpicker" data-live-search="true" id="categories">
                                <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>
                                Теги <span class="text-danger">*</span>
                            </label>
                            {{--                            <input type="text" id="tags" class="form-control" data-role="tagsinput" value="jQuery,Script,Net">--}}
                            <select multiple data-role="tagsinput" id="tags">
                                <option value="jQuery">jQuery</option>
                                <option value="Angular">Angular</option>
                                <option value="React">React</option>
                                <option value="Vue">Vue</option>
                                ...
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="richtextDescription">Опиcание<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control richTextBox @error('description') 'is-invalid' @enderror"
                                      name="description" id="richtextDescription">
                                {{ old('description') }}
                        </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="richtextDescription">Полный текст<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control richTextBox @error('context') 'is-invalid' @enderror"
                                      name="context" id="richtextContext">
                                {{ old('context') }}
                        </textarea>
                            @error('context')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-texmart-green text-white">Добавить</button>
                        <a href="{{ route('profile') }}" class="btn">Назад</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tagsinput.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>
        $('#categories').select2();
    </script>
    <script src="{{ asset('js/tagsinput.js') }}">
        $('#tags').tagsinput();
    </script>
@endpush
