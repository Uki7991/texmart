<nav class="navbar navbar-expand-md fixed-top navbar-{{ $theme ?? 'light' }} bg-texmart-orange shadow-sm " id="header">
    <div class="container-fluid">
        <a class="navbar-brand position-relative" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" width="200" height="auto" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li>
                    @include('partials.search')
                </li>
            </ul>

            <ul class="navbar-nav mx-auto">
                <li>
                    <a href="http://texmart/workshop" class="nav-link text-white text-capitalize">Цеха</a>
                </li>
                <li>
                    <a href="http://texmart/product" class="nav-link text-white text-capitalize">Продукции</a>
                </li>
                <li>
                    <a href="http://texmart/about" class="nav-link text-white text-capitalize">О нас</a>
                </li>
                <li>
                    <a href="http://texmart/contacts" class="nav-link text-white text-capitalize">Контакты</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Вход') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item scale-on-hover">
                            <a class="nav-link btn btn-danger text-white rounded-0" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



{{--@push('scripts')--}}
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function(){--}}
            {{--// Фикмированная шапка при скролле--}}
            {{--$("#header").removeClass("bg-warning");--}}
            {{--$(window).scroll(function(){--}}
                {{--if ($(this).scrollTop() > 50) {--}}
                    {{--console.log($("#header"))--}}
                    {{--$("#header").addClass("bg-warning");--}}
                {{--} else {--}}
                    {{--console.log($("#header"))--}}
                    {{--$("#header").removeClass("bg-warning");--}}
                {{--};--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endpush--}}
