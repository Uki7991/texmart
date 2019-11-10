<div class="row justify-content-between ">
    <div class="col-2 m-0">
        <a href="\" >
            <img src="{{asset('img/logo3.png')}}" class="img-header pt-3 pt-md-2" alt="logo">
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
                <a href="#menu2"
                   class="hamburger-sprite mt-3 waves-effect waves-light" style="padding-top: 25px"></a>
            </li>
        </ul>
    </div>
</div>
<nav id="menu2" class="btn-submit-your-application">
    <ul>
        <li><a href="">Главная</a></li>
        <li><a href="{{ route('profile') }}">Добавить объявления</a></li>
        <li class="btn-submit-your-application"><a href="" data-toggle="modal" data-target="#modalContactForm" >Оставить заявку</a></li>
        <li><a href="{{ route('customer_list') }}">Список заявок от заказчиков</a></li>
        <li><span>Объявления</span>
            <ul>
                <li><a href="{{ route('production') }}">Производственные цеха и фабрики</a></li>
                <li><a href="{{ route('gds') }}">Товары</a></li>
                <li><a href="{{ route('service') }}">Услуги</a></li>
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
        <li><a href="">Отзывы</a></li>
        <li><a href="{{ route('contacts') }}">Контакты</a></li>
    </ul>
</nav>
@push("scripts")
    <script>
        new Mmenu("#menu2", {
            "extensions": [
                "pagedim-black"
            ],
            "navbars": [
                {
                    "position": "top",
                    "content": [
                        "searchfield"
                    ]
                },
                {
                    "position": "top",
                    "content": [
                        "prev",
                        "title"
                    ]
                },
            ],
            onClick : {
                close          : true,
                preventDefault : false,
            }
        });
    </script>
@endpush


