{{--<!-- Card -->--}}
{{--<div class="card mb-5">--}}

{{--    <!-- Card image -->--}}
{{--    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">--}}

{{--    <!-- Card content -->--}}
{{--    <div class="card-body">--}}

{{--        <!-- Title -->--}}
{{--        <h4 class="card-title"><a>Card title</a></h4>--}}
{{--        <!-- Text -->--}}
{{--        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--        <!-- Button -->--}}
{{--        <a href="#" class="btn btn-primary">Button</a>--}}

{{--    </div>--}}

{{--</div>--}}
{{--<!-- Card -->--}}
<div class="" data-intro="На этом графике вы можете просматривать статистику показов ваших объявлений">
    <div class=" my-5" data-step="3" >
        <canvas id="myChart"></canvas>
    </div>

    <ul class="list-inline border shadow rounded py-2 px-2" >
        @for($i = 0; $i < 4; $i++)
            <li class="list-inline-item mb-2">
                <div class="d-flex align-items-center">
                    <div class="col-3 pr-0">
                        <img src="{{ asset('img/user-logo.jpg') }}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="col">
                        <p class="m-0">klk</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
        @endfor
    </ul>
</div>
