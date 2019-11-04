
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
                <a href="#menu"
                   class="hamburger-sprite mt-3 waves-effect waves-light" style="padding-top: 25px"></a>
            </li>
        </ul>
    </div>
</div>
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
                },
                {
                    "position": "bottom",
                    "content": [
                        "<a class='fa fa-envelope' href='#/'></a>",
                        "<a class='fab fa-twitter' href='#/'></a>",
                        "<a class='fab fa-facebook' href='#/'></a>"
                    ]
                }
            ]
        });
    </script>
@endpush


