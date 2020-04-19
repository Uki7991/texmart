<div class="container">
    <nav class="navbar navbar-expand-lg shadow-none navbar-dark px-0">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo3.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto flex-row justify-content-around mb-3 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Покупателю
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Поставщику
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn border border-white rounded py-2 px-3" href="#">Создать тендер</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn border border-white rounded py-2 px-3" href="#">Добавить компанию</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn border texmart-border-primary texmart-bg-primary rounded py-2 px-3"
                       href="#">Войти</a>
                </li>
                {{--                        <li class="nav-item d-flex align-items-center">--}}
                {{--                            <a class="nav-link" href="#"><i class="fas fa-bars fa-lg"></i></a>--}}
                {{--                        </li>--}}
            </ul>
        </div>
    </nav>
</div>
