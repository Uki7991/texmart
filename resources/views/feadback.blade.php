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
                            <hr align="center" width="450" size="4" color="black"/>
                            <form>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="firstName">Ваше имя</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Иван">
                                    </div>
                                    <div class="col">
                                        <label for="firstName">Фамилия</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Медведев">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Ваш телефонный номер:</label>
                                    <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Электронная почта</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Описание</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary">Отправить</button>
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
