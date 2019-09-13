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
                            Название предприятия:
                        </label>
                        <input type="text" name="title" class="form-control" required>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>
                            Бренд:
                        </label>
                        <input type="text" name="brand" class="form-control">
                        @error('brand')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>
                            Выберите главную картинку для объявления:
                        </label>
                        <input type="file" name="logo" id="image-input" class="form-control" required>
                        @error('logo')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="">
                            <img id="image" class="w-100 img-preview" src="">
                            <a id="rotate-left" class="btn btn-success"><i class="fas fa-redo-alt fa-flip-horizontal"></i></a>
                            <a id="rotate-right" class="btn btn-success"><i class="fas fa-redo-alt"></i></a>

                            <input type="text" name="rotate" id="dataImage">
                            <div id="cropped" class="position-relative"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="images">Выберите картинки для объявления:</label>
                        <input type="file" name="images[]" class="form-control" id="images" multiple>
                        @error('images')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categories-multi">Выберите категории:</label>
                        <ul id="tree1">
                            @foreach($productionCats as $category)
                                <li>
                                    @if(count($category->childs))
                                        <i class="fas fa-plus"></i>
                                    @endif
                                    <a href="#" class="text-dark">{{ $category->title }}</a>
                                    @if(count($category->childs))
                                        @include('partials.manage_childs',['childs' => $category->childs->sortBy('order'), 'input' => [true, 'checkbox']])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        @error('categories')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="employee">Количество сотрудников:</label>
                        <input type="number" min="1" max="1000" class="form-control" name="amount_production"
                               id="employee">
                        @error('amount_production')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="equipment">Оборудование:сколько спецмашинок,сколько прямострочек?</label>
                        <input type="text" class="form-control" name="tools" id="equipment">
                        @error('tools')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-group">
                                <label for="site">Укажите ваш личный сайт(если он есть):</label>
                                <input type="text" class="form-control" name="site" id="url" placeholder="Сайт">
{{--                                @error('site')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-group">
                                <label for="address">Укажите адрес:</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="richtextDescription">Опишите свое производство:</label>
                        <textarea class="form-control richTextBox" name="description" id="editorContent">
                        </textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="minimum_order">Минимальный заказ:</label>
                        <input type="number" min="1" max="1000" class="form-control" name="minimum_order"
                               id="minimum">
                        @error('minimum_order')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <h3>Объем прозводства в месяц:</h3>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="from">От:</label>
                                <input type="number" min="1" class="form-control" name="from_amount_production"
                                       id="from">
                                @error('from_amount_production')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="before">До:</label>
                                <input type="number" max="10000000" class="form-control" name="before_amount_prod"
                                       id="before">
                                @error('before_amount_prod')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <h3>Укажите ваши контактные данные:</h3>
                    <div class="form-row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone1">Телефон #1:</label>
                                <input type="hidden" name="code">
                                <input type="tel" name="phone1" class="form-control phone1" required>
                                @error('phone1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone2">Телефон #2:</label>
                                <input type="hidden" name="code2">
                                <input type="tel" name="phone2" class="form-control phone2">
                                @error('phone2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <h3>Укажите свое местонахождение на карте:</h3>
                    @include('user-production.formFields.coordinates', ['idMap' => 'map1'])

                    <button type="submit" class="btn btn-texmart-green text-white">Подать</button>
                    <a href="{{ route('profile') }}" class="btn">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{asset("css/intlTelInput.min.css")}}">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
    <script>
        var editorContent = tinyMCE.get('tinyeditor').getContent();
        if (editorContent == '')
        {
            // Editor empty

        }
        else
        {
            // Editor contains a value
        }
    </script>
{{--    <script>--}}
{{--        tinyMCE.init({--}}
{{--            setup: function (editor) {--}}
{{--                editor.on('init change', function () {--}}
{{--                    editor.save();--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--        $('#myform').validate({--}}
{{--            ignore: ':hidden:not(textarea)'--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script src="tiny_mce.js">--}}
{{--        // $('.richtextDescription').click(function() {--}}
{{--        //     tinymce.triggerSave();--}}
{{--        // });--}}
{{--        tinyMCE.init({--}}
{{--            mode: "textareas",--}}
{{--            theme: "simple",--}}
{{--            onchange_callback: function(editor){--}}
{{--                tinyMCE.triggerSave();--}}
{{--                $("#" + editor.id).valid();--}}
{{--            }--}}
{{--        });--}}
{{--        $(function () {--}}
{{--            var validator = $("myform").submit(function () {--}}
{{--                tinyMCE.triggerSave();--}}
{{--            }).validate({--}}
{{--                ignore:"",--}}
{{--                rules:{--}}
{{--                    title: "required",--}}
{{--                    content: "required"--}}
{{--                },--}}
{{--                errorPlacement:function (label, element) {--}}
{{--                    if (element.is(textarea)){--}}
{{--                        label.insertAfter(element.next());--}}
{{--                    } else {--}}
{{--                        label.insertAfter(element)--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--            validator.focusInvalid = function () {--}}
{{--                if (this.settings.focusInvalid){--}}
{{--                    try {--}}
{{--                        var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);--}}
{{--                        if (toFocus.is("textarea")){--}}
{{--                            tinyMCE.get(toFocus.attr("id")).focus();--}}
{{--                        } else {--}}
{{--                            toFocus.filter(":visible").focus();--}}
{{--                        }--}}
{{--                    } catch (e) {--}}

{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
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
        $('.phone1').on('focus', function (e) {
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
        $('.phone2').on('focus', function (e) {
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
        let input = $('#image-input');
        let container = $('#image');

        container.cropper({
            aspectRatio: 1,
            viewMode: 1
        });

        let cropper = container.data('cropper');
        input.change(e => {
            let oFReader = new FileReader();

            oFReader.readAsDataURL(input[0].files[0]);

            oFReader.onload = function (oFREvent) {

                // Destroy the old cropper instance
                container.cropper('destroy');

                // Replace url
                container.attr('src', this.result);

                // Start cropper
                container.cropper({
                    aspectRatio: 1,
                    autoCrop: false,
                    dragCrop: false,
                    viewMode: 1
                });
                cropper = container.data('cropper');
                setTimeout(rotateImage, 1000);

            };

        });

        function rotateImage() {
            cropper.rotate(0);
            $('#dataImage').val(cropper.getImageData().rotate);
        }

        $('#crop').click(e => {
            let image = $(cropper.getCroppedCanvas()).addClass('img-fluid');
            $('#cropped').html(image);
        });
        $('#rotate-right').click(e => {
            let btn = $(e.currentTarget);

            cropper.rotate(90);
            console.log(cropper.getCropBoxData());
            $('#dataImage').val(cropper.getImageData().rotate);
        });
        $('#rotate-left').click(e => {
            let btn = $(e.currentTarget);

            cropper.rotate(-90);
            console.log(cropper.getImageData());
            $('#dataImage').val(cropper.getImageData().rotate);
        });
    </script>
    <script>
        let input2 = $('#image-input2');
        let container2 = $('#image2');

        container2.cropper({
            aspectRatio: 1,
            viewMode: 1
        });

        let cropper2 = container.data('cropper');
        input2.change(e => {
            let oFReader = new FileReader();

            oFReader.readAsDataURL(input2[0].files[0]);

            oFReader.onload = function (oFREvent) {

                // Destroy the old cropper instance
                container2.cropper('destroy');

                // Replace url
                container2.attr('src', this.result);

                // Start cropper
                container2.cropper({
                    aspectRatio: 1,
                    viewMode: 1
                });
                cropper2 = container2.data('cropper');
                setTimeout(rotateImage2, 1000);
            };
        });
        function rotateImage2() {
            cropper2.rotate(0);
            $('#dataImage2').val(cropper2.getImageData().rotate);
        }

        $('#crop2').click(e => {
            let image2 = $(cropper2.getCroppedCanvas()).addClass('img-fluid');
            $('#cropped2').html(image2);
        });
        $('#rotate-right2').click(e => {
            let btn2 = $(e.currentTarget);

            cropper2.rotate(90);
            console.log(cropper2.getImageData());
            $('#dataImage2').val(cropper2.getImageData().rotate);
        });
        $('#rotate-left2').click(e => {
            let btn2 = $(e.currentTarget);

            cropper2.rotate(-90);
            console.log(cropper2.getImageData());
            $('#dataImage2').val(cropper2.getImageData().rotate);
        });
    </script>
    <script>
        let input3 = $('#image-input3');
        let container3 = $('#image3');

        container3.cropper({
            aspectRatio: 1,
            viewMode: 1
        });

        let cropper3 = container.data('cropper');
        input3.change(e => {
            let oFReader = new FileReader();

            oFReader.readAsDataURL(input3[0].files[0]);

            oFReader.onload = function (oFREvent) {

                // Destroy the old cropper instance
                container3.cropper('destroy');

                // Replace url
                container3.attr('src', this.result);

                // Start cropper
                container3.cropper({
                    aspectRatio: 1,
                    viewMode: 1
                });
                cropper3 = container3.data('cropper');
                setTimeout(rotateImage3, 1000);
            };
        });
        function rotateImage3() {
            cropper3.rotate(0);
            $('#dataImage3').val(cropper3.getImageData().rotate);
        }

        $('#crop3').click(e => {
            let image3 = $(cropper3.getCroppedCanvas()).addClass('img-fluid');
            $('#cropped3').html(image3);
        });
        $('#rotate-right3').click(e => {
            let btn3 = $(e.currentTarget);

            cropper3.rotate(90);
            console.log(cropper3.getImageData());
            $('#dataImage3').val(cropper3.getImageData().rotate);
        });
        $('#rotate-left3').click(e => {
            let btn3 = $(e.currentTarget);

            cropper3.rotate(-90);
            console.log(cropper3.getImageData());
            $('#dataImage3').val(cropper3.getImageData().rotate);
        });
    </script>
@endpush
