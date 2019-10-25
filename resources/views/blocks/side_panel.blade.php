<div class="bg-texmart-sidebar m-0 fixed-top maxw-content row min-vh-100">
    <div class="col-12 px-0">
        <ul class="navbar-nav ml-3 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="#menu"
                   class="hamburger-sprite mt-3" style="padding-top: 25px"></a>
            </li>
            <li class="nav-item ">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="user-sprite my-3"></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="search-sprite"></a>
            </li>

        </ul>
    </div>
    <div class="align-self-end col-12 px-0 px-sm-0 p-lg-1" style="padding-bottom: 20px;">
        <ul class="nav flex-column ml-3 mt-2 mt-lg-0">
            <li class="nav-item mr-3 ">
                <a href="https://api.whatsapp.com/send?phone=996502900500" class="whatsapp-sprite waves-effect waves-light text-muted" title="Ссылка на страницу в Facebook">
                </a>
            </li>
            <li class="nav-item mr-3">
                <a href="https://www.instagram.com/texmart.kg/" class="instagram-sprite waves-effect waves-light text-muted my-3">

                </a>
            </li>
            <li class="nav-item mr-3">
                <a href="https://www.facebook.com/texmart.kg" class="fb-sprite waves-effect waves-light text-muted" title="Ссылка на facebook">

                </a>
            </li>
            <li class="nav-item mr-3 ">
                <a href="" class="telegram-sprite waves-effect waves-light text-muted my-3" title="Ссылка на telegram">
                </a>
            </li>
            <li class="nav-item mr-3 ">
                <a href="https://vk.com/texmartkg" class="vk-sprite waves-effect waves-light text-muted pb-4" title="Ссылка на vk">

                </a>
            </li>
        </ul>
    </div>
</div>
<nav id="menu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/work">Our work</a></li>
        <li><span>About us</span>
            <ul>
                <li><a href="/about/history">History</a></li>
                <li><span>The team</span>
                    <ul>
                        <li><a href="/about/team/management">Management</a></li>
                        <li><a href="/about/team/sales">Sales</a></li>
                        <li><a href="/about/team/development">Development</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><span>Services</span>
            <ul>
                <li><a href="/services/design">Design</a></li>
                <li><a href="/services/development">Development</a></li>
                <li><a href="/services/marketing">Marketing</a></li>
            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

@push("scripts")
    <script>
        new Mmenu("#menu", {
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
                }
            ]
        });
    </script>
@endpush
