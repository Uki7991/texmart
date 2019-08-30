<div class="tab-pane" id="production-create" role="tabpanel" aria-labelledby="production-create-tab">
    <h1>Производственный цех</h1>

    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('productions.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="productions">
                    <div class="form-group">
                        <label>
                            Название объявления
                        </label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>
                            Бренд/Наименование предприятия
                        </label>
                        <input type="text" name="brand" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                            Картинка для объявления
                        </label>
                        <input type="file" name="logo" id="logo_announce" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <img id="image" class="w-100 img-preview" src="{{ asset('img/2 lg.jpg') }}">
                            <a id="rotate" class="btn btn-success"><i class="fa fa-redo-alt"></i></a>
                            <a id="crop" class="btn btn-success"><i class="fas fa-crop"></i></a>

                            <input type="text" id="dataImage">
                            <div id="cropped" class="position-relative"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categories-multi">Категории</label>
                        <ul id="tree1">
                            @foreach($productionCats as $category)
                                <li>
                                    @if(count($category->childs))
                                        <i class="fas fa-plus"></i>
                                    @endif
                                    <a href="#" class="text-dark">{{ $category->title }}</a>
                                    @if(count($category->childs))
                                        @include('partials.manage_childs',['childs' => $category->childs, 'input' => [true, 'checkbox']])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="employee">Количество сотрудников</label>
                        <input type="number" min="1" max="1000" class="form-control" name="amount_production" id="employee">
                    </div>
                    <div class="form-group">
                        <label for="equipment">Оборудование</label>
                        <input type="text" class="form-control" name="tools" id="equipment">
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-group">
                                <label for="site">Личный сайт</label>
                                <input type="url" class="form-control" name="url" id="url" placeholder="Сайт">
                            </div>
                        </div>
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-group">
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
                    <div class="form-group">
                        <label for="employee">Объем производства</label>
                        <input type="number" min="1" max="1000" class="form-control" name="amount_production" id="employee">
                    </div>
                    <h3>Контакты</h3>
                    <div class="form-row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone1">Телефон #1</label>
                                <input type="hidden" name="code">
                                <input type="tel" name="phone1" class="form-control phone1">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone2">Телефон #2</label>
                                <input type="hidden" name="code2">
                                <input type="tel" name="phone2" class="form-control phone2">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <h3>Карта</h3>
                    @include('user-production.formFields.coordinates', ['idMap' => 'map1'])
                    <div class="form-group">
                        <label for="images">Картинки</label>
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
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/

        $(".phone1").intlTelInput({
            initialCountry: "kg",
            preferredCountries: ["ru", "kg", "kz"],
            separateDialCode: true,
            excludeCountries: ["xk"],
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });
        $('.phone1').on('focus', function(e){
            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code"]').val(code);
            var $this = $(this),
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            // console.log(activePlaceholder + ' => ' + newMask);

            // Init new mask for focused input
            $this.mask(newMask);
        });

        $('.phone1').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>
    <script>
        /* INITIALIZE BOTH INPUTS WITH THE intlTelInput FEATURE*/

        $(".phone2").intlTelInput({
            initialCountry: "ru",
            preferredCountries: ["ru", "kg", "kz"],
            separateDialCode: true,
            excludeCountries: ["xk"],
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
        });
        $('.phone2').on('focus', function(e){
            let input = $(e.currentTarget);
            let code = input.siblings('.iti__flag-container').find('.iti__selected-dial-code').html();
            input.parent().siblings('input[name="code2"]').val(code);
            var $this = $(this),
                // Get active country's phone number format from input placeholder attribute
                activePlaceholder = $this.attr('placeholder'),
                // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
                newMask = activePlaceholder.replace(/[1-9]/g, "0");
            // console.log(activePlaceholder + ' => ' + newMask);

            // Init new mask for focused input
            $this.mask(newMask);
        });

        $('.phone2').on('countrychange', (e, c) => {
            let $this = $(e.currentTarget);
            $this.removeAttr('maxlength');
        });
    </script>

@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/cropper.min.js') }}"></script>
    {{--    <script src="{{ asset('js/jquery-cropper.js') }}"></script>--}}
    <script>
        let image = $('#image');
        image.cropper({
            aspectRatio: NaN,
            crop: function(event) {
            }
        });
        // Get the Cropper.js instance after initialized
        var cropper = image.data('cropper');
        $('#logo_announce').change(e => {
            previewFile();
            image = $('#image');
            image.cropper({
                aspectRatio: NaN,
                crop: function(event) {
                }
            });
            // Get the Cropper.js instance after initialized
            cropper = image.data('cropper');
            console.log(cropper.getImageData());
        });

        $('#crop').click(e => {
            let imageCropped = $(cropper.getCroppedCanvas()).addClass('img-fluid');
            $('#cropped').html(imageCropped);
        });
        $('#rotate').click(e => {
            let btn = $(e.currentTarget);

            cropper.rotate(90);
            $('#dataImage').val(cropper.getImageData().rotate);
        });


        function previewFile() {
            var preview = $('#image');
            var file    = $('#logo_announce')[0].files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.attr('src', reader.result);
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.attr('src', '');
            }

        }

    </script>
@endpush
