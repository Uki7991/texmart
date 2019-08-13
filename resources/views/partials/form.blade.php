<form>
    <div class="form-row">
        <div class="col">
            <label for="firstName"><i class="fas fa-user text-primary"></i> {{ __('Имя') }}
            </label>
            <input type="text"
                   class="form-control rounded-pill shadow-sm @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required autocomplete="name"
                   autofocus id="firstName" placeholder="Иван">
        </div>
    </div>
    <div class="form-group">
        <label for="Ваш телефонный номер"><i
                class="fas fa-phone-alt text-primary pt-3 "></i> {{ __('Ваш телефонный номер:') }}
        </label>
        <input type="text"
               class="form-control rounded-pill shadow-sm @error('phone') is-invalid @enderror"
               name="phone" value="{{ old('phone') }}" required autocomplete="phone"
               id="phone-number" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><i
                class="fas fa-envelope text-primary"></i> {{ __('E-Mail') }}</label>
        <input type="email"
               class="form-control rounded-pill shadow-sm @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email"
               id="exampleFormControlInput1"
               placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1"><i
                class="fas fa-pencil-alt text-primary"></i> {{ __('описание ') }}</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" " rows="3"></textarea>
    </div>
    <div class="form-row">
        <div class="col">
            <button type="button" class="btn border border-dark shadow-sm rounded-pill mx-1 call-btn transition-100 "> {{ __('Отправить') }} <i class="fas fa-envelope"></i></button>
        </div>
    </div>
</form>
