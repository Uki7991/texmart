<div class="tab-pane fade active" id="v-pills-announcement" role="tabpanel" aria-labelledby="v-pills-announcement-tab">
    <h2>Добавления объявления</h2>
    <form>
        <div class="form-group">
            <label for="formGroupTitleInput">Заголовок</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formGroupTitleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupAddressInput">Адресс</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formGroupAddressInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupDescriptionInput">Описание</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formGroupDescriptionInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupSiteInput">Сайт</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formGroupSiteInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupLatitudeInput">Широта</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formGroupLatitudeInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formLongtitudeInput">Долгота</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formLongtitudeInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formEmployeeInput">Сотрудники</label>
            <input type="text" class="form-control rounded-pill shadow-sm" id="formEmployeeInput" placeholder="">
        </div>
        <div class="form-group">
            <input type="file" class="my-pond" name="filepond"/>
        </div>
        <div class="col pt-4">
            <button type="button" class="btn btn-outline-success shadow-sm rounded-pill mx-1 call-btn transition-100">Добавить</button>
        </div>

    </form>
</div>

@push('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <script>
        $(function(){

            // First register any plugins
            $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

            // Turn input element into a pond
            $('.my-pond').filepond();

            // Set allowMultiple property to true
            $('.my-pond').filepond('allowMultiple', true);

            // Listen for addfile event
            $('.my-pond').on('FilePond:addfile', function(e) {
                console.log('file added event', e);
            });

        });
    </script>
@endpush
