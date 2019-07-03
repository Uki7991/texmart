@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-2 p-0">
                @include('partials.left_sidebar')
            </div>
            <div class="col">
                <div class="container">
                    <div class="row bg-white p-3">
                        <div class="col">
                            <h2>Консультация</h2>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at
                                cum cupiditate earum eius esse eveniet facere fugiat harum illum laborum, libero
                                molestias mollitia pariatur quisquam, repudiandae sapiente vitae voluptates.</p>
                        </div>
                        <div class="col-5 border border-dark pb-2">
                            <h1>Обратная связь</h1>
                            <hr align="center" width="426" size="4" color="black"/>
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
                                    <div class="col">
                                        <label for="firstName"><i
                                                class="fas fa-user text-primary"></i> {{ __('Фамилия') }}</label>
                                        <input type="text"
                                               class="form-control rounded-pill shadow-sm @error('lastname') is-invalid @enderror"
                                               name="lastname" value="{{ old('lastname') }}" required
                                               autocomplete="lastname" id="lastName" placeholder="Медведев">
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn border border-dark shadow-sm rounded-pill mx-1 call-btn transition-100 ">Отправить</button>
                                    </div>
                                    @include('partials.btn.call')
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    @include('partials.scripts.call_btn')
@endpush