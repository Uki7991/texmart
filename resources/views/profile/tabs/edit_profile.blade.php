<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <h2>Личный кабинет</h2>
    <div class="form-group">
        <label for="name" class="text-md-right"><i class="fas fa-user text-primary"></i> {{ __('ФИО') }}</label>

        <input id="name" type="text" class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email" class="col-form-label text-md-right"><i class="fas fa-envelope text-primary"></i> {{ __('E-Mail') }}</label>

        <input id="email" type="email" class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label text-md-right"><i class="fas fa-key text-primary"></i> {{ __('Пароль') }}</label>

        <input id="password" type="password" class="form-control rounded-pill shadow-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <button type="button" class="btn btn-outline-primary shadow-sm rounded-pill mx-1 call-btn transition-100"> {{ __('Редактировать') }} <i class="fas fa-edit"></i></button>
</div>
