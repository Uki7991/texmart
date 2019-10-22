<div class="amber darken-4 m-0 fixed-top maxw-content row min-vh-100">
    <div class="col-12">
        <ul class="navbar-nav ml-3 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="#menu"
                   class=""><img src="icons/hamburger.svg" class="img-fluid" alt=""></a>
            </li>
            <li class="nav-item ">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class=""><img src="icons/avatar.png" class="img-fluid" alt=""></a>
            </li>
            <li class="nav-item ">
                <a href="#" class=""><img src="icons/search.png" alt="" class="img-fluid"></a>
            </li>

        </ul>
    </div>
    <div class="align-self-end col-12">
        <ul class="nav flex-column ml-3 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="" class="text-muted" title="Ссылка на страницу в Facebook">
                    <img src="icons/whatsapp.png"  alt="ссылка на whatsapp">
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="text-muted">
                    <img src="icons/insta.png" class="my-2" alt="Ссылка на instagram">
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="text-muted" title="Ссылка на facebook">
                    <img src="icons/facebook.png"  alt="Ссылка на facebook">
                </a>
            </li>
            <li class="nav-item ">
                <a href="" class="text-muted" title="Ссылка на telegram">
                    <img src="icons/telegram.png" class="my-2" alt="ссылка на telegram">
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
