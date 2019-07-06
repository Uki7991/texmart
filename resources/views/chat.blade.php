@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-4">
            <div class="col">
                <div class="container bg-white py-3">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="list-group">
                                <a class="list-group-item" href=""></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body conversations">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p>
                                                <strong>asd</strong><br>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <textarea name="content" placeholder="Напишите сообщение"
                                                      class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Отправить</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
