<a href=""  class="text-dark" data-toggle="modal" data-target="#exampleModalCenter">
    Оставте отзыв
</a>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content position-relative rounded-0 border-0 text-dark bg-white" style="">
            <div class="position-relative">
                <div class="modal-header border-0">
                    <div class="col-12">
                        <h3 class="modal-title text-center" id="">Поставьте оценку</h3>
                    </div>
                    <button type="button" class="close position-absolute" style="right:10px;top: 10px;"
                            data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times text-dark" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex h-25 align-items-center">
                            <h1 class="font-weight-bold m-0 mr-3 h2">{{ $production->title }}</h1>
                            @include('partials.btn.rateYo', ['id' => 'rateYo1'])
                        </div>
                            <input type="hidden" class="" id="input_rating">
                        <div class="col-12 order-1">
                            <p id=""></p>
                            @auth
                                <form action="" class="">
                                    <input type="hidden">
                                    <div class="form-group">
                                        <label for="message">Оставте отзыв</label>
                                        <textarea class="form-control" name="message" id="message" cols="30"
                                                  rows="5"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-sm text-muted" data-dismiss="modal">Отмена
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary rounded-0">Отправить</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
