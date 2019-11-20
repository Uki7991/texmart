<div class="row justify-content-between ">
    <div class="col-auto m-0">
        <a href="{{ route('homepage') }}">
            <img src="{{asset('img/logo3.png')}}" class="img-header pt-2 pt-md-2" alt="logo">
        </a>
    </div>
    <div class="col-auto col-md-4 m-0">
        <ul class="nav justify-content-end lighten-4">
            <li class="nav-item">
                <a href="#" class="search-sprite waves-effect waves-light mt-3"></a>
            </li>
            <li class="nav-item">
                <a href="{{ auth()->check() ? '#leftsidebarAva' : route('login') }}"
                   class="user-sprite my-3 waves-effect waves-light mx-3 mx-md-5"></a>
            </li>
            <li class="nav-item">
                <a href="#menu2"
                   class="hamburger-sprite mt-3 waves-effect waves-light" style="padding-top: 25px"></a>
            </li>
        </ul>
    </div>
</div>
<nav id="menu2" class="btn-submit-your-application">
    <ul>
        <li><a href="{{ route('homepage') }}">Главная</a></li>
        <li><a href="{{ route('profile') }}">Добавить объявления</a></li>
        {{--        <li class="btn-submit-your-application"><a href="#modalContactForm" data-toggle="modal" data-target="#modalContactForm" >Оставить заявку</a></li>--}}
        {{--        <li><a href="{{ route('customer_list') }}">Список заявок от заказчиков</a></li>--}}
        <li><span>Объявления</span>
            <ul>
                <li><a href="{{ route('production', ['type' => 'productions']) }}">Производственные цеха и фабрики</a>
                </li>
                <li><a href="{{ route('production', ['type' => 'product']) }}">Товары</a></li>
                <li><a href="{{ route('production', ['type' => 'service']) }}">Услуги</a></li>
            </ul>
        </li>
        <li><span>О компании</span>
            <ul>
                <li><a href="{{ route('about') }}">О нас</a></li>
                <li><a href="{{ route('blog_index') }}">Блог</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
            </ul>
        </li>
        <li><span>Наши услуги</span>
            <ul>
                <li><a href="{{ route('consulting') }}">Консультация</a></li>
                <li><a href="{{ route('logistics') }}">Логистика</a></li>
                <li><a href="{{ route('quality') }}">Проверка качества</a></li>
            </ul>
        </li>
        <li><a href="#reviews">Отзывы</a></li>
        <li><a href="{{ route('contacts') }}">Контакты</a></li>
    </ul>
</nav>

<nav id="leftsidebarAva" class="btn-submit-your-application">
    <ul>
        <li><a href="{{ route('profile.dashboard') }}">Лента</a></li>
        @if((auth()->check() && auth()->user()->role_id == 4) || (auth()->check() && auth()->user()->role_id == 1))
            <li><a href="{{ route('profile.announce.index') }}">Заказы</a></li>
        @endif
        @if((auth()->check() && auth()->user()->role_id == 5) || (auth()->check() && auth()->user()->role_id == 1))
            <li><span>Подать объявления</span>
                <ul>
                    <li><a href="{{ route('profile.production.create', ['type' => 'productions']) }}">Производственные
                            цеха и фабрики</a></li>
                    <li><a href="{{ route('profile.production.create', ['type' => 'product']) }}">Товары</a></li>
                    <li><a href="{{ route('profile.production.create', ['type' => 'service']) }}">Услуги</a></li>
                </ul>
            </li>
            <li><a href="{{ route('profile.production.index') }}">Мои объявления</a></li>
        @endif
        <li><a href="{{ route('profile.settings') }}">Настройки аккаунта</a></li>
        @if(auth()->check())
            <li><a href="#" onclick="event.preventDefault();$('.logout-form').submit();"
                   class=" list-group-item-action text-danger ">{{ __('Выход') }}</a></li>
        @endif
    </ul>
</nav>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
@push("scripts")
    <script>
        new Mmenu("#menu2", {
            extensions: {
                "all": ["pagedim-black", "shadow-panels", "fx-panels-slide-100", "border-none", "position-left"],
                "(max-width: 600px)": ["fullscreen"]
            },
            "navbars": [
                {
                    "position": "top",
                    "content": [
                        "prev",
                        "title",
                        "close"
                    ]
                },
            ],
            "iconbar": {
                "use": true,
                "top": [
                    "<a href='{{ route('homepage') }}'><i class='fa fa-home'></i></a>",
                    "<a href='{{ route('profile.dashboard') }}'><i class='fa fa-user'></i></a>"
                ],
                "bottom": [
                    "<a href='https://api.whatsapp.com/send?phone=996502900500'><i class='fab fa-whatsapp fa-lg'></i></a>",
                    "<a href='https://www.facebook.com/texmart.kg'><i class='fab fa-facebook fa-lg'></i></a>",
                    "<a href='https://vk.com/texmartkg'><i class='fab fa-vk fa-lg'></i></a>",
                    "<a href='https://www.instagram.com/texmart.kg/'><i class='fab fa-instagram fa-lg'></i></a>",
                    "<a href='https://t.me/txmrt'><i class='fab fa-telegram fa-lg'></i></a>"
                ]
            },
            onClick: {
                close: true,
                preventDefault: false,
            }
        });
    </script>

    <script>
        new Mmenu("#leftsidebarAva", {
            extensions: {
                "all": ["pagedim-black", "shadow-panels", "fx-panels-slide-100", "border-none", "position-left"],
                "(max-width: 600px)": ["fullscreen"]
            },
            "navbars": [
                {
                    "position": "top",
                    "content": [
                        "prev",
                        "title",
                        "close"
                    ]
                },
            ],
            onClick: {
                close: true,
                preventDefault: false,
            }
        });
    </script>
    <script>
        $('.btn-submit-your-application').hover(function () {
            $('.btn-submit-your-application-child').addClass('active');
            $('.btn-submit-your-application-child').addClass('animated slideInRight');
        }, function () {
            $('.btn-submit-your-application-child').removeClass('active animated slideInRight');
        });

    </script>
@endpush


