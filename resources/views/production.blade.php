@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="container-fluid  mt-5 pt-5">
        <div class="row">
            <div class="col-2">
                <div class="accordion" id="accordionExample">
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingOne" style="padding: 0px;">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Женские
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                Мужские
                            </div>
                        </div>
                    </div>
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingTwo" style="padding: 0px;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Мужские
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Детские
                            </div>
                        </div>
                    </div>
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree" style="padding: 0px;">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Детские
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10" id="productions-list">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 pt-1">
                        <div class="card border shadow-sm production-card transition-500">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
