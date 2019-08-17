<div class="container py-5">
    <h2 class="text-center">
        <i class="fas fa-check text-texmart-orange"></i> Задайте вопрос
    </h2>
    <div class="question--row justify-content-center align-items-center py-2">
        <div class="question--section">
            <div class="card border-0">
                <img src="{{ asset("img/sharon-mccutcheon-tn57JI3CewI-unsplash.jpg") }}" class="card-img rounded-0" alt="...">
                <div class="backdrop"></div>
                <div class="card-img-overlay text-white text-center center-content">
                    <div>
                      <h5 class="card-title">Заполните форму.</h5>
                      <p class="card-text">Менеджеры компании с радостью ответят на ваши вопросы.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="question--section py-5 border shadow-sm col-sm-12">
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
                            class="fas fa-pencil-alt text-primary"></i> {{ __('Описание') }}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Сотавте подробное описание"></textarea>
                </div>
                <div class="btn-reg-form">
                    <div class="col" >
                        <button type="button" class="btn btn-danger text-white rounded-0 btn-lg px-5 py-2 shadow-lg scale-on-hover"> {{ __('Отправить') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
