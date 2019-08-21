<div class="tab-pane" id="production-create" role="tabpanel" aria-labelledby="production-create-tab">
    <h1>Производственный цех</h1>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <form action="{{ route('productions.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="productions">
                    <div class="form-group">
                        <label>
                            Название обьявления
                        </label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-froup">
                                <label for="site">Сайт</label>
                                <input type="text" class="form-control" name="site" id="site">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-froup">
                                <label for="address">Адрес</label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="richtextExcerpt">Мини описание</label>
                        <textarea class="form-control" name="excerpt" id="richtextExcerpt"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="richtextDescription">Описание</label>
                        <textarea class="form-control richTextBox" name="description" id="richtextDescription">
                        </textarea>
                    </div>
                    <h3>Contacts</h3>
                    <div class="form-row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="phone1">Phone #1</label>
                                <input type="text" name="phone1" class="form-control" id="phone1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="phone2">Phone #2</label>
                                <input type="text" name="phone2" class="form-control" id="phone2">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <h3>Map</h3>
                    @include('user-production.formFields.coordinates')


                    <div class="form-group">
                        <label for="categories-multi">Categories</label>
                        <select name="categories[]" class="" id="categories-multi" multiple="multiple">
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input type="file" name="images[]" class="form-control" id="images" multiple>
                    </div>

                    <button type="submit" class="btn btn-texmart-green text-white">Подать</button>
                    <a href="{{ route('profile') }}" class="btn">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>

@push('styles')
{{--    <link rel="stylesheet" href="http://texmart/admin/voyager-assets?path=js/skins/voyager/skin.min.css">--}}
@endpush
@push('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#richtextDescription'
        });
    </script>
{{--    <script src="{{ voyager_asset('js/app.js') }}"></script>--}}
@endpush
