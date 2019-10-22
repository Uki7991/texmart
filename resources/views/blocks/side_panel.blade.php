<div class="bg-texmart-sidebar m-0 fixed-top maxw-content row min-vh-100">
    <div class="col-12">
        <ul class="navbar-nav ml-3 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="#menu"
                   class="" style="padding-top: 25px"><img src="icons/hamburger.svg" class="img-fluid" alt=""></a>
            </li>
            <li class="nav-item ">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="my-3"><img src="icons/avatar.png" class="img-fluid" alt=""></a>
            </li>
            <li class="nav-item ">
                <a href="#" class=""><img src="icons/search.png" alt="" class="img-fluid"></a>
            </li>

        </ul>
    </div>
    <div class="align-self-end col-12" style="padding-bottom: 20px;">
        <ul class="nav flex-column ml-3 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="" class="text-muted" title="Ссылка на страницу в Facebook">
                    <img src="icons/whatsapp.png" alt="ссылка на whatsapp">
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="text-muted">
                    <img src="icons/insta.png" class="my-3" alt="Ссылка на instagram">
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="text-muted" title="Ссылка на facebook">
                    <img src="icons/facebook.png" alt="Ссылка на facebook">
                </a>
            </li>
            <li class="nav-item ">
                <a href="" class="text-muted" title="Ссылка на telegram">
                    <img src="icons/telegram.png" class="my-3" alt="ссылка на telegram">
                </a>
            </li>
            <li class="nav-item ">
                <a href="" class="text-muted" title="Ссылка на vk">
                    <img src="icons/vk.png" class="" alt="ссылка на vk">
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
