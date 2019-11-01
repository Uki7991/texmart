@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="container-fluid  mt-5 pt-5">
        <div class="row">
            @include('blocks.left_sidebar')
            <div class="col-9" id="productions-list">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
                        <div class="card border shadow-sm production-card transition-500">
                            <a href=""
                               class="text-dark text-decoration-none">
                                <div class="card-img-top position-relative text-center div-lazy"
                                     style="height: 150px; background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://texmart.kg/storage/productions/production_logo_5da4726bf0fad.jpg&quot;);">
                                </div>
                                <div class="card-body pb-0">
                                    <p class="font-weight-bold card-title h6">Швейное производст...</p>
                                </div>
                            </a>
                            <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0"><a
                                    href=""
                                    class="text-dark text-decoration-none">
                                    <p class="m-0 small">
                                        <i class="fas fa-eye fa-sm"></i>&nbsp;<span class="">30</span>
                                    </p>
                                </a>
                                <div class="ml-auto d-flex align-items-center"><a
                                        href=""
                                        class="text-dark text-decoration-none">
                                    </a>
                                    <a href="#" data-id=""
                                           class="btn  shadow-sm rounded-pill mx-1 call-btn transition-100 btn-sm"
                                           data-toggle="modal" data-target="#callToProduction">
                                        <i class="fas fa-envelope text-success"></i>
                                    </a>
                                    <a href="" data-id="128"
                                       class="btn  shadow-sm rounded-pill mx-1 favorite transition-100 btn-sm">
                                        <i class="far fa-heart text-juice"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
                        <div class="card border shadow-sm production-card transition-500">
                            <a href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                               class="text-dark text-decoration-none">
                                <div class="card-img-top position-relative text-center div-lazy"
                                     style="height: 150px; background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://texmart.kg/storage/productions/production_logo_5da4726bf0fad.jpg&quot;);">
                                </div>
                                <div class="card-body pb-0">
                                    <p class="font-weight-bold card-title h6">Швейное производст...</p>
                                </div>
                            </a>
                            <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0"><a
                                    href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                    class="text-dark text-decoration-none">
                                    <p class="m-0 small">
                                        <i class="fas fa-eye fa-sm"></i>&nbsp;<span class="">30</span>
                                    </p>
                                </a>
                                <div class="ml-auto d-flex align-items-center"><a
                                        href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                        class="text-dark text-decoration-none">
                                    </a><a href="#" data-id=""
                                           class="btn  shadow-sm rounded-pill mx-1 call-btn transition-100 btn-sm"
                                           data-toggle="modal" data-target="#callToProduction">
                                        <i class="fas fa-envelope text-success"></i>
                                    </a>
                                    <a href="http://texmart.kg/login" data-id="128"
                                       class="btn  shadow-sm rounded-pill mx-1 favorite transition-100 btn-sm">
                                        <i class="far fa-heart text-juice"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
                        <div class="card border shadow-sm production-card transition-500">
                            <a href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                               class="text-dark text-decoration-none">
                                <div class="card-img-top position-relative text-center div-lazy"
                                     style="height: 150px; background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://texmart.kg/storage/productions/production_logo_5da4726bf0fad.jpg&quot;);">
                                </div>
                                <div class="card-body pb-0">
                                    <p class="font-weight-bold card-title h6">Швейное производст...</p>


                                </div>
                            </a>
                            <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0"><a
                                    href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                    class="text-dark text-decoration-none">


                                    <p class="m-0 small">
                                        <i class="fas fa-eye fa-sm"></i>&nbsp;<span class="">30</span>
                                    </p>

                                </a>
                                <div class="ml-auto d-flex align-items-center"><a
                                        href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                        class="text-dark text-decoration-none">
                                    </a><a href="#" data-id=""
                                           class="btn  shadow-sm rounded-pill mx-1 call-btn transition-100 btn-sm"
                                           data-toggle="modal" data-target="#callToProduction">
                                        <i class="fas fa-envelope text-success"></i>
                                    </a>
                                    <a href="http://texmart.kg/login" data-id="128"
                                       class="btn  shadow-sm rounded-pill mx-1 favorite transition-100 btn-sm">
                                        <i class="far fa-heart text-juice"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
                        <div class="card border shadow-sm production-card transition-500">
                            <a href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                               class="text-dark text-decoration-none">
                                <div class="card-img-top position-relative text-center div-lazy"
                                     style="height: 150px; background-position: center center; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://texmart.kg/storage/productions/production_logo_5da4726bf0fad.jpg&quot;);">
                                </div>
                                <div class="card-body pb-0">
                                    <p class="font-weight-bold card-title h6">Швейное производст...</p>

                                </div>
                            </a>
                            <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0"><a
                                    href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                    class="text-dark text-decoration-none">
                                    <p class="m-0 small">
                                        <i class="fas fa-eye fa-sm"></i>&nbsp;<span class="">30</span>
                                    </p>

                                </a>
                                <div class="ml-auto d-flex align-items-center"><a
                                        href="http://texmart.kg/productions/shveynyy-ceh-akylay"
                                        class="text-dark text-decoration-none">
                                    </a><a href="#" data-id=""
                                           class="btn  shadow-sm rounded-pill mx-1 call-btn transition-100 btn-sm"
                                           data-toggle="modal" data-target="#callToProduction">
                                        <i class="fas fa-envelope text-success"></i>
                                    </a>
                                    <a href="http://texmart.kg/login" data-id="128"
                                       class="btn  shadow-sm rounded-pill mx-1 favorite transition-100 btn-sm">
                                        <i class="far fa-heart text-juice"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around align-items-center">
                    <p class="">Показано: 1-20 of 31 результат(ов)</p>
                    <nav>
                        <ul class="pagination pg-amber">
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
@endsection
