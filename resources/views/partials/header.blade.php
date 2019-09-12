<nav class="navbar navbar-expand-xl fixed-top navbar-{{ $theme ?? 'light' }} bg-texmart-orange shadow-sm " id="header">
    <div class="container-fluid">
        <a class="navbar-brand position-relative" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" width="200" height="auto" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="" style="color:white">Меню</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li>
                    @include('partials.search')
                </li>
            </ul>

            <ul class="navbar-nav mx-auto text-center">

                <li class="nav-scale">
                    <a href="{{ route('productions.index', ['type' => 'productions']) }}" class="nav-link text-white text-capitalize">Производство</a>
                </li>
                <li class="nav-scale">
                    <a href="{{ route('productions.index', ['type' => 'product']) }}" class="nav-link text-white text-capitalize">Товары</a>
                </li>
                <li class="nav-scale">
                    <a href="{{ route('productions.index', ['type' => 'service']) }}" class="nav-link text-white text-capitalize">Услуги</a>
                </li>
                <li class="nav-scale">
                    <a href="/about" class="nav-link text-white text-capitalize">О нас</a>
                </li>
                <li class="nav-scale">
                    <a href="/delivery" class="nav-link text-white text-capitalize">Доставка</a>
                </li>
                @guest
                <li class="nav-scale">
                    <a href="{{ route('login') }}" class="nav-link text-white btn btn-danger text-capitalize">{{ __('Добавить объявление') }}</a>
                </li>
                @else
                <li class="nav-scale">
                    <a href="{{ route('profile', ['sharp' => true]) }}" class="nav-link text-white btn btn-danger text-capitalize">{{ __('Добавить объявление') }}</a>
                </li>
                @endguest



{{--                <li class="nav-scale" >--}}
{{--                    <a href="tel:+996 508 900 500" class="nav-link btn btn-danger text-white text-capitalize">+996 508 900 500</a>--}}
{{--                </li>--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav text-center">
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
                                {{ __('Профиль') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
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
