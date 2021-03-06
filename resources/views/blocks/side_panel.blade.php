<div class="bg-texmart-sidebar m-0 fixed-top maxw-content row min-vh-100">
    <div class="align-self-start col-12 px-0 px-sm-0 p-lg-1">
        <ul class="navbar-nav ml-3 mt-2 mt-lg-0">
            <li class="nav-item">
                <a href="#menu"
                   class="hamburger-sprite mt-3" style="padding-top: 25px"></a>
            </li>
            <li class="nav-item ">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="user-sprite my-3"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="search-sprite"></a>
            </li>
        </ul>
    </div>
    <div class="align-self-end col-12 px-0 px-sm-0 p-lg-1" style="padding-bottom: 20px;">
        <ul class="nav flex-column ml-3 mt-2 mt-lg-0">
            <li class="nav-item mr-3 ">
                <a href="https://api.whatsapp.com/send?phone=996502900500"
                   class="whatsapp-sprite waves-effect waves-light text-muted" title="Ссылка на страницу в whatsapp">
                </a>
            </li>
            <li class="nav-item mr-3">
                <a href="https://www.instagram.com/texmart.kg/"
                   class="instagram-sprite waves-effect waves-light text-muted my-3">
                </a>
            </li>
            <li class="nav-item mr-3">
                <a href="https://www.facebook.com/texmart.kg" class="fb-sprite waves-effect waves-light text-muted"
                   title="Ссылка на facebook">
                </a>
            </li>
            <li class="nav-item mr-3 ">
                <a href="https://t.me/txmrt" class="telegram-sprite waves-effect waves-light text-muted my-3"
                   title="Ссылка на telegram">
                </a>
            </li>
            <li class="nav-item mr-3 ">
                <a href="https://vk.com/texmartkg" class="vk-sprite waves-effect waves-light text-muted pb-4"
                   title="Ссылка на vk">
                </a>
            </li>
        </ul>
    </div>
</div>
<nav id="menu" class="btn-submit-your-application">
    <ul>
        <li><a href="{{ route('homepage') }}">Главная</a></li>
        @if(auth()->check() && auth()->user()->role_id == 4)
            <li><a href="{{ route('profile') }}">Добавить объявления</a></li>
        @endif
        @if(auth()->check() && auth()->user()->role_id == 5)
        <li><a href="{{ route('profile.announce.create') }}">Разместить заказ</a></li>
        @endif
        <li class="btn-submit-your-application"><a href="" data-toggle="modal" data-target="#modalContactForm">Задать
                вопрос</a></li>
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

@push("scripts")
    <script>
        new Mmenu("nav#menu", {
            "extensions": [
                "pagedim-black"
            ],
            "navbars": [
                {
                    "position": "top",
                    "content": [
                        "prev",
                        "title",
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
        $('.btn-submit-your-application').hover(function () {
            $('.btn-submit-your-application-child').addClass('active');
            $('.btn-submit-your-application-child').addClass('animated slideInRight');
        }, function () {
            $('.btn-submit-your-application-child').removeClass('active animated slideInRight');
        });

    </script>
@endpush
