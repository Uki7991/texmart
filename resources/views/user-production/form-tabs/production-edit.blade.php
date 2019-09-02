@extends('layouts.app')


@push('styles')
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
@endpush

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?apikey={{ env('YANDEX_MAPS_API_KEY') }}&lang=ru_RU" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/comboTreePlugin.js') }}"></script>
    <script src="{{ asset('js/icontains.js') }}"></script>
    <script>
        $.fn.extend({
            treed: function (o) {

                var openedClass = 'fa-plus';
                var closedClass = 'fa-minus';

                if (typeof o != 'undefined'){
                    if (typeof o.openedClass != 'undefined'){
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined'){
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
                tree.find('.branch .indicator').each(function(){
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
        $.ajax({
            url: '{{ route('get.categories') }}',
            success: data => {
                console.log(data);
            },
            error: () => {
                console.log('error');
            }
        });
        $("body").on('click', '.select2-results__group', function() {
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
{{--    @include('partials.scripts.favorite_click')--}}
{{--    @include('partials.scripts.favorite_btn')--}}
{{--    @include('partials.scripts.call_btn')--}}
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


@section('content')
    @include('partials.header')

    <div class="container">
        <div class="row my-5">
            <div class="col-10">
                <h1>Производственный цех</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <form action="{{ route('productions.update', $production) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="type" value="productions">
                    <div class="form-group">
                        <label>
                            Название объявления
                        </label>
                        <input type="text" name="title" class="form-control" value="{{ $production->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>
                            Бренд/Наименование предприятия
                        </label>
                        <input type="text" name="brand" class="form-control" value="{{ $production->brand }}">
                    </div>
                    <div class="form-group">
                        <label>
                            Картинка для объявления
                        </label>
                        <input type="file" name="logo" class="form-control">
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
                                        @include('partials.manage_childs',['childs' => $category->childs->sortBy('order'), 'input' => [true, 'checkbox']])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="employee">Количество сотрудников</label>
                        <input type="number" min="1" max="1000" class="form-control" value="{{ $production->amount_production }}" name="amount_production" id="employee">
                    </div>
                    <div class="form-group">
                        <label for="equipment">Оборудование</label>
                        <input type="text" class="form-control" name="tools" id="equipment" value="{{ $production->tools }}">
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="site">Личный сайт</label>
                                <input type="url" class="form-control" name="url" id="url" value="{{ $production->site }}" placeholder="Сайт">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">Адрес</label>
                                <input type="text" class="form-control" name="address" id="address" value="{{ $production->address }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="richtextExcerpt">Мини описание</label>
                        <textarea class="form-control" name="excerpt" id="richtextExcerpt">{{ $production->excerpt }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="richtextDescription">Описание</label>
                        <textarea class="form-control richTextBox" name="description" id="richtextDescription">
                            {{ $production->description }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="employee">Объем производства</label>
                        <input type="number" min="1" max="1000" class="form-control" name="amount_production" value="{{ $production->amount_production }}" id="employee">
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
                                <input type="email" name="email" value="{{ $production->email }}" class="form-control" id="email" placeholder="Email">
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
@endsection

