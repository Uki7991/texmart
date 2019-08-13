<div class="container">
    <div class="row">
        <div class="col-4">
            <h2>
                <span class=""></span>
                <i class="fas fa-check-square"></i> Задайте вопрос
            </h2>
            <div class="card border-0">
                <img src="{{ asset("img/priazha-nitki-dereviannyi-fon-raznotsvetie.jpg") }}" class="card-img" alt="...">
                <div class="card-img-overlay text-black-50 text-center">
                    <h5 class="card-title">Заполните форму.</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>

        </div>
        <div class="col-6 border border-dark pb-2">
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
                <div class="form-row">
                    <div class="col">
                        <button type="button" class="btn border border-dark shadow-sm rounded-pill mx-1 call-btn"> {{ __('Отправить') }} <i class="fas fa-envelope"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
