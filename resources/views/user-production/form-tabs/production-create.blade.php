<div class="tab-pane" id="production-create" role="tabpanel" aria-labelledby="production-create-tab">
    <h1>Производственный цех</h1>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>
                            Название обьявления
                        </label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-froup">
                        <label for="site">Сайт</label>
                        <input type="text" class="form-control" name="site" id="site" required>
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

                    @include('user-production.formFields.coordinates')


                    <button type="submit" class="btn btn-texmart-green text-white">Подать</button>
                    <a href="{{ route('profile') }}" class="btn">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="http://texmart/admin/voyager-assets?path=js/skins/voyager/skin.min.css">
@endpush
@push('scripts')
    <script src="{{ voyager_asset('js/app.js') }}"></script>
@endpush