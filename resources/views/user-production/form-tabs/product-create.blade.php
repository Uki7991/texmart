<div class="tab-pane" id="product-create" role="tabpanel" aria-labelledby="product-create-tab">
    <h1>Товары</h1>

    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('productions.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="product">
                    <div class="form-group">
                        <label>
                            Название товара
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
                            Бренд/Наименование предприятия
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
                            Выберите главную картинку для объявления
                        </label>
                        <input type="file" name="logo" id="image-input2" class="form-control" required>
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
                        <label for="categories-product">Категории</label>
                        <ul id="tree2">
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
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-froup">
                                <label for="site">Личный сайт</label>
                                <input type="text" class="form-control" name="site" id="site" placeholder="Сайт">
{{--                                @error('site')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="col-12 col-sm-10 col-md-4">
                            <div class="form-froup">
                                <label for="address">Адрес</label>
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
                        <label for="richtextDescription">Описание</label>
                        <textarea class="form-control richTextBox" name="description" id="richtextDescription">
                        </textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <h3>Контакты</h3>
                    <div class="form-row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone1">Телефон #1</label>
                                <input type="hidden" name="code">
                                <input type="text" name="phone1" class="form-control phone1" required>
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
                                <input type="text" name="phone2" class="form-control phone2">
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
                                <input type="email" name="email" class="form-control" id="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <h3>Укажите свое местонахождение на карте</h3>
                    @include('user-production.formFields.coordinates', ['idMap' => 'map3'])

                    <div class="form-group">
                        <label for="images">Картинки</label>
                        <input type="file" name="images[]" class="form-control" id="images" multiple>
                        @error('images')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-texmart-green text-white">Подать</button>
                    <a href="{{ route('profile') }}" class="btn">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>
