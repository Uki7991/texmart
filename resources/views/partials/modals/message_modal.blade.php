<div class="modal fade" id="callToProduction" tabindex="-1" role="dialog" aria-labelledby="callToProduction" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content position-relative rounded-0 border-0 text-dark bg-white" style="">
            <div class="position-relative">
                <div class="modal-header border-0">
                    <div class="col-12">
                        <h3 class="modal-title text-center" id="callToProductionTitle">Связаться с производителем <span id="title_production_modal"></span></h3>
                    </div>
                    <button type="button" class="close position-absolute" style="right:10px;top: 10px;" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times text-dark" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 col-md-6 order-1">
                            <p id="mobile_phone_modal"></p>
                            @auth
                                <form action="" class="">
                                    <input type="hidden">
                                    <div class="form-group">
                                        <label for="message">Сообщение обьявлению</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-sm text-muted" data-dismiss="modal">Отмена</button>
                                    <button type="submit" class="btn btn-sm btn-primary rounded-0">Отправить</button>
                                </form>
                            @endauth
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 bg-warning py-5">
                            <div class="modal-phone">
                                <p class="text-center">По юридическим вопросам звоните на телефон:</p>
                                <a href="tel:+996700700700" class="nav-link text-dark h5 font-weight-bold text-center">+996 (700) 700-700</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
