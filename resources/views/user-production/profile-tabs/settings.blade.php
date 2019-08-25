<div class="tab-pane active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <h1>Настройки профиля</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('user.edit', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name" class="text-md-right"><i class="fas fa-user text-primary"></i> {{ __('ФИО') }}
                        </label>
                        <input id="name" type="text" class="form-control shadow-sm @error('name') is-invalid @enderror"
                               name="name" value="{{ auth()->user()->name ?? '' }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>
                            Картинка для аватарки
                        </label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить изменения</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{ route('user.password.edit', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="password" class="text-md-right"><i
                                class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>
                        <input id="password" type="password"
                               class="form-control shadow-sm @error('password') is-invalid @enderror"
                               name="password"
                               required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="text-md-right"><i
                                class="fas fa-key text-primary"></i> {{ __('Подтвердите пароль') }}</label>
                        <input id="password-confirm" type="password" class="form-control shadow-sm"
                               name="password_confirmation"
                               required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-success">Изменить пароль</button>
                </form>
            </div>
        </div>

    </div>
</div>
