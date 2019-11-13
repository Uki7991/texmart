<!-- Central Modal Small -->
<div class="modal fade" id="tenSecondsModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">


        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="row justify-content-around my-4">
                    <div class="col-auto">
                        <a href="#" class="btn btn-success">Заказчик</a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-success">Производитель</a>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-center" style="color: #e99b33 !important;padding-bottom: 25px">
                    Категории
                </h2>
                <div class="row justify-content-center">
                    <div class="row col-12 col-md-10">
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/women_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Женская одежда</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/polo_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Мужская одежда</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/baby_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Детская одежда</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/specialist_dress_category.png') }}"
                                     alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Спец одежда</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative" style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/big_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Батальные размеры</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative " style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/other_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center" style="min-height: 48px;">Прочее</p>
                            </a>
                            <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card shadow position-relative " style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/cloth_dress_category.png') }}" alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center pb-1" style="min-height: 48px;">Ткань, фурнитура</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 mb-3 mb-md-5 card-dress">
                            <a href="#" class="card  shadow " style="border-radius: 10px;">
                                <img class="w-25 mx-auto pt-3" src="{{ asset('icons/service_dress_category.png') }}"
                                     alt="Card image cap">
                                <p class="card-title mt-4 text-dark text-center pb-1" style="min-height: 48px;">Услуги</p>
                                <img class="img-fluid position-absolute check-icon" src="{{ asset('icons/confirm.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Central Modal Small -->

@push('scripts')
    <script>
        setTimeout(function () {
            $('#tenSecondsModal').modal('show');
        }, 1000);
        setTimeout(function() {
            $('#tenSecondsModal').modal('show');
        },60*1000);
    </script>
    <script>
        let cardDress = $('.card-dress');

        cardDress.click(function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
        });
    </script>
@endpush
