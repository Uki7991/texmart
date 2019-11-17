<div class="container step_productions_1">
    <div class="row ">
        <div class="col-12 mb-5 ">
            <h2>Создание объявления производственного цеха</h2>
        </div>
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('profile.production.store') }}" enctype="multipart/form-data" method="POST">
                @if($errors->any())
                    <span class="invalid-feedback d-block">
                                <strong>У вас есть ошибки при заполнении</strong>
                            </span>
                @endif
                @csrf
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>
                            Название товара <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}" required>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>
                            Бренд <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror"
                               value="{{ old('brand') }}">
                        @error('brand')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <h3>Укажите ваши контактные данные:</h3>
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="phone1">Телефон #1 <span class="text-danger">*</span></label>
                            <input type="hidden" name="code">
                            <input type="text" name="phone1"
                                   class="form-control phone1 @error('phone1') ' is-invalid ' @enderror" required>
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
                            <input type="text" name="phone2"
                                   class="form-control phone2 @error('phone2') is-invalid @enderror">
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
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-12 col-sm-10 col-md-6">
                        <div class="form-group">
                            <label for="site">Личный сайт (если он есть)</label>
                            <input type="text" class="form-control @error('site') is-invalid @enderror"
                                   value="{{ old('site') }}" name="site" id="site" placeholder="Сайт">
                            {{--                                @error('site')--}}
                            {{--                                <span class="invalid-feedback" role="alert">--}}
                            {{--                                        <strong>{{ $message }}</strong>--}}
                            {{--                                        </span>--}}
                            {{--                                @enderror--}}
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6">
                        <div class="form-group">
                            <label for="address">Укажите адрес <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   value="{{ old('address') }}" name="address" id="address" required>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        Выберите главную картинку для объявления <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="logo" id="image-input2"
                           class="form-control @error('logo') is-invalid @enderror" value="{{ old('logo') }}" required>
                    @error('logo')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div>
                        <img id="image2" class="w-100 img-preview" src="">
                        <a id="rotate-left2" class="btn btn-success"><i class="fas fa-redo-alt fa-flip-horizontal"></i></a>
                        <a id="rotate-right2" class="btn btn-success"><i class="fas fa-redo-alt"></i></a>
                        <a id="crop3" class="btn btn-success"><i class="fas fa-crop"></i></a>

                        <input type="text" name="rotate" id="dataImage2">
                        <div id="cropped2" class="position-relative"></div>
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
                    <label for="categories-product">Выберите категорию товара <span class="text-danger">*</span></label>
                    <ul id="tree2" style="list-style: none">
                        @foreach($productCats as $category)
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
                    <span class="invalid-feedback" @error('categories') style="display: block;" @enderror role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="richtextDescription">Опишите свой товар <span class="text-danger">*</span></label>
                    <textarea class="form-control richTextBox @error('description') is-invalid @enderror"
                              name="description" id="richtextDescription">
                                {{ old('description') }}
                        </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>

                <h3>Укажите свое местонахождение на карте</h3>
                @include('partials.formFields.coordinates', ['idMap' => 'map3'])

                <button type="submit" class="btn btn-green text-white">Подать</button>
                <a href="{{ route('profile.production.index', ['type' => $type]) }}" class="btn">Назад</a>
            </form>
        </div>
    </div>
</div>


@push('styles')
    <link rel="stylesheet" href="{{asset("css/intlTelInput.min.css")}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
@endpush
@push('scripts')

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/comboTreePlugin.js') }}"></script>
    <script src="{{ asset('js/icontains.js') }}"></script>
    <script>
        $.fn.extend({
            treed: function (o) {
                var openedClass = 'fa-plus';
                var closedClass = 'fa-minus';
                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                }
                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    });
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function () {
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
        $('#tree2').treed();
        $('#tree3').treed();
        $("body").on('click', '.select2-results__group', function () {
            $(this).siblings().toggle();
        });
    </script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.richTextBox'
        });
        tinymce.init({
            selector: '#equipment'
        });
    </script>
    <script src="{{ asset('js/cropper.min.js') }}"></script>
    {{--    <script src="{{ asset('js/jquery-cropper.js') }}"></script>--}}

    <script>
        let input2 = $('#image-input2');
        let container2 = $('#image2');
        container2.cropper({
            aspectRatio: 1,
            viewMode: 1
        });
        let cropper2 = container2.data('cropper');
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
{{--    <script>--}}
{{--        let intro = introJs();--}}
{{--        intro.setOptions({--}}
{{--            prevLabel:"Назад",--}}
{{--            nextLabel:"Вперед",--}}
{{--            skipLabel:"Пропустить",--}}
{{--            doneLabel:"Готово",--}}
{{--            steps: [--}}
{{--                {--}}
{{--                    element: '.container.step_productions_1',--}}
{{--                    intro: "Форма создание объявления производственного цеха.Заполните форму."--}}
{{--                },--}}
{{--            ]--}}
{{--        });--}}
{{--        intro.start();--}}
{{--    </script>--}}

@endpush
