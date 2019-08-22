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
                            Название объявления
                        </label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>
                            Бренд/Наименование предприятия
                        </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-froup">
                                <label for="employee">Количество сотрудников</label>
                                <input type="text" class="form-control" name="" id="employee" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-froup">
                                <label for="equipment">Оборудование</label>
                                <input type="text" class="form-control" name="" id="equipment" required>
                            </div>
                        </div>
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
                    <h3>Контакты</h3>
                    <div class="form-row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="phone1">Телефон #1</label>
                                <input type="tel" name="phone1" class="form-control" id="phone1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="phone2">Телефон #2</label>
                                <input type="tel" name="phone2" class="form-control" id="phone2">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <h3>Карта</h3>
                    @include('user-production.formFields.coordinates', ['idMap' => 'map1'])


                    <div class="form-group">
                        <label for="categories-multi">Категории</label>
{{--                        <select name="categories[]" class="form-control w-100" id="categories-multi" multiple="multiple">--}}
{{--                            @foreach($categories as $cat)--}}
{{--                                @if(count($cat->childs) > 0)--}}
{{--                                    <optgroup label="{{ $cat->title }}" data-id="{{ $cat->id }}" data-toggle="collapse" data-target="#multiCollapse{{ $cat->id }}" aria-expanded="false" aria-controls="multiCollapse{{ $cat->id }}">--}}
{{--                                        @include('user-production.partials.manageChildsSelect', ['childs' => $cat->childs])--}}
{{--                                    </optgroup>--}}
{{--                                @else--}}
{{--                                    <optgroup label="{{ $cat->title }}" data-id="{{ $cat->id }}"  class="collapse collapse-multi" id="multiCollapse{{ $cat->id }}" data-toggle="collapse" data-target="#multiCollapse{{ $cat->id }}" aria-expanded="false" aria-controls="multiCollapse{{ $cat->id }}">--}}
{{--                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>--}}
{{--                                    </optgroup>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                        <ul id="tree1">
                            @foreach($categories as $category)
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
    <link  rel="stylesheet"  href = "{{asset("css/intlTelInput.min.css")}}">
    {{--<link rel="stylesheet" href="http://texmart/admin/voyager-assets?path=js/skins/voyager/skin.min.css">--}}
@endpush
@push('scripts')
    {{--<script src="{{ voyager_asset('js/app.js') }}"></script>--}}

    <script src="js/intlTelInput.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var input = document.querySelector("#phone1");
        intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    success(countryCode);
                });
            },
            utilsScript: "js/utils.js"
        });
    </script>
    <script>
        var input = document.querySelector("#phone2");
        intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    success(countryCode);
                });
            },
            utilsScript: "js/utils.js"
        });
    </script>

@endpush
