@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#multiimage" data-toggle="tab" role="tab" aria-controls="multiimage" aria-selected="false" class="nav-link">Множественное</a>
                    </li>
                    <li class="nav-item">
                        <a href="#onceimage" data-toggle="tab" role="tab" aria-controls="onceimage" aria-selected="false" class="nav-link">Одиночное</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content">
                    <div id="onceimage" class="tab-pane fade">
                        <form action="{{ route('image.resize') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Картинка</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Ширина</label>
                                        <input type="text" name="width" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Высота</label>
                                        <input type="text" name="height" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Уменьшить</button>
                        </form>
                    </div>
                    <div id="multiimage" class="tab-pane fade">
                        <form action="{{ route('image.resize') }}" enctype="multipart/form-data" method="POST">
                            <p class="small text-muted">Картинки должны быть одного размера</p>
                            @csrf
                            <div class="form-group">
                                <label>Картинка</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Ширина</label>
                                        <input type="text" name="width" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Высота</label>
                                        <input type="text" name="height" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Уменьшить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
