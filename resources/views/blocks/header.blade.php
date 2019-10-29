
<div class="row justify-content-between ">
    <div class="col-2 m-0">
        <a href="\" >
            <img src="{{asset('img/logo3.png')}}" class="img-header pt-3 pt-md-1" alt="logo">
        </a>
    </div>

    <div class="col-10 col-md-4 m-0">

        <ul class="nav justify-content-end lighten-4">
            <li class="nav-item">
                <a href="#" class="search-sprite waves-effect waves-light mt-3"></a>
            </li>
            <li class="nav-item">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="user-sprite my-3 waves-effect waves-light mx-3 mx-md-5"></a>
            </li>
            <li class="nav-item">
                <a href="#menu"
                   class="hamburger-sprite mt-3 waves-effect waves-light" style="padding-top: 25px"></a>
            </li>
        </ul>
    </div>
</div>



