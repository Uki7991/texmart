@extends('user-production.profile')

@section('office')
    <div class="tab-pane" id="service-create" role="tabpanel" aria-labelledby="service-create-tab">
        <h1>Услуги</h1>
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
                        <input type="hidden" name="type" value="service">
                        <div class="form-group">
                            <label>
                                Название услуги <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control @error('title') 'is-invalid' @enderror" value="{{ old('title') }}" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                Выберите главную картинку для объявления <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="logo" id="image-input3" class="form-control @error('logo') 'is-invalid' @enderror">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div>
                                <img id="image3" class="w-100 img-preview" src="">
                                <a id="rotate-left3" class="btn btn-success"><i class="fas fa-redo-alt fa-flip-horizontal"></i></a>
                                <a id="rotate-right3" class="btn btn-success"><i class="fas fa-redo-alt"></i></a>
                                <a id="crop3" class="btn btn-success"><i class="fas fa-crop"></i></a>

                                <input type="text" name="rotate" id="dataImage3">
                                <div id="cropped3" class="position-relative"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="images">Выберите картинки для объявления</label>
                            <input type="file" name="images[]" class="form-control @error('images') 'is-invalid' @enderror" id="images" multiple>
                            @error('images')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categories-service">Выберите категории <span class="text-danger">*</span></label>
                            <ul id="tree3">
                                @foreach($serviceCats as $category)
                                    <li>
                                        @if(count($category->childs))
                                            <i class="fas fa-plus"></i>
                                        @endif
                                        <a href="#" class="text-dark">{{ $category->title }}</a>
                                        @if(count($category->childs))
                                            @include('partials.manage_childs',['childs' => $category->childs, 'input' => [true, 'radio']])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            @error('categories')
                            <span class="invalid-feedback" @error('categories') style="display:block;" @enderror role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="form-froup">
                                    <label for="site">Личный cайт</label>
                                    <input type="text" class="form-control @error('site') 'is-invalid' @enderror" value="{{ old('site') }}" name="site" id="site" placeholder="Сайт">
                                    {{--                                @error('site')--}}
                                    {{--                                <span class="invalid-feedback" role="alert">--}}
                                    {{--                                        <strong>{{ $message }}</strong>--}}
                                    {{--                                        </span>--}}
                                    {{--                                @enderror--}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="form-froup">
                                    <label for="address">Укажите адрес <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('address') 'is-invalid' @enderror" value="{{ old('address') }}" name="address" id="address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <label for="richtextDescription">Опишите услугу <span class="text-danger">*</span></label>
                            <textarea class="form-control richTextBox @error('description') 'is-invalid' @enderror" name="description" id="richtextDescription">
                                {{ old('description') }}
                        </textarea>
                            @error('description')
                            <span class="invalid-feedback @error('description') d-block @enderror" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <h3>Укажите ваши контактные данные</h3>
                        <div class="form-row">
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="phone1">Телефон #1 <span class="text-danger">*</span></label>
                                    <input type="hidden" name="code">
                                    <input type="text" name="phone1" class="form-control phone1 @error('phone1') 'is-invalid' @enderror">
                                    @error('phone1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="phone2">Телефон #2</label>
                                    <input type="hidden" name="code2">
                                    <input type="text" name="phone2" class="form-control phone2 @error('phone2') 'is-invalid' @enderror">
                                    @error('phone2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control @error('email') 'is-invalid' @enderror" value="{{ old('email') }}" id="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h3>Укажите свое местонахождение на карте</h3>
                        @include('user-production.formFields.coordinates', ['idMap' => 'map2'])


                        <button type="submit" class="btn btn-texmart-green text-white">Подать</button>
                        <a href="{{ route('profile') }}" class="btn">Назад</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset("css/intlTelInput.min.css")}}">
@endpush
@push('scripts_profile')
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
