<nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand w-25" href="{{ route('homepage') }}"><img src="{{ asset('img/logo.png') }}" class="img-fluid w-50" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="{{ route('admin.admin.dashboard') }}">Dashboard</a>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault();$('.logout-form').submit();">Log out</a>
                </div>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
            @csrf
        </form>
    </div>
</nav>
