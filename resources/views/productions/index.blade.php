@extends('layouts.app')
@section('seo_content')
    <meta name="description" content="Texmart.kg это первая интернет-платформа оптовых производителей текстильной и швейной продукции Кыргызской Республики. Вы можете заказать одежду оптом по очень низким ценам! Ведение бизнеса в формате В2В. Услуга логистики и доставки. Оформление документов экспортно-импортных документов.">
    <meta name="keywords" content="texmart, техмарт, оптом, одежда, оптовая, бишкек, киргизия, кыргызстан, детская, мужская, женская, батальные, размеры, купить, купить одежду, оптовики, оптовая одежда, купить оптом, одежда оптом">
@endsection
@section('og_content')
    <meta property="og:title" content="Texmart.kg - онлайн платформа оптовых производителей в Киргизии" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="{{ asset('img/logo.png') }}" />
@endsection
@section('content')

    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="container-fluid py-4 pt-5 mt-5">
        <div class="row">
            <div class="col-lg-3">
                @include('partials.left_sidebar', ['toggle' => true])
            </div>
            <div class="col" id="productions-list">

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pg-amber justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
{{--    @include('partials.modals.message_modal')--}}
@stop

@push('scripts')
    <script src="https://pagination.js.org/dist/2.1.4/pagination.min.js"></script>

    <script>
        function paginationWithDots(c, m) {
            var current = c,
                last = m,
                delta = 1,
                left = current - delta,
                right = current + delta + 1,
                range = [],
                rangeWithDots = [],
                l;
            for (let i = 1; i <= last; i++) {
                if (i == 1 || i == last || i >= left && i < right) {
                    range.push(i);
                }
            }
            for (let i of range) {
                if (l) {
                    if (i - l === 2) {
                        rangeWithDots.push(l + 1);
                    } else if (i - l !== 1) {
                        rangeWithDots.push('...');
                    }
                }
                rangeWithDots.push(i);
                l = i;
            }
            return rangeWithDots;
        }
        function registerPageButtons(data) {
            data.click(e => {
                e.preventDefault();
                let btn = $(e.currentTarget);
                let page = btn.data('page');
                if (page) {
                    params.page = page;
                    fetchProductions(params);
                }
            })
        }
    </script>
    <script>
        let params = [];
        $('input[name="categories[]"]').change(e => {
            let input = $(e.currentTarget);
            let isChecked = input.is(':checked') ? true : false;
            let id = input.data('id');
            isChecked ? params.push(id) : params.splice($.inArray(id, params), 1);
            console.log(params);
            fetchProductions(params);
        });
        function fetchProductions(params) {
            console.log(params);
            $.ajax({
                url: '{{ route('productions.filter') }}',
                data: {
                    params: params,
                    page: params.page,
                    type: '{{ request('type') }}'
                },
                success: data => {

                    let pagination = $('ul.pagination');
                    pagination.empty();
                    if (data.count) {
                        let paginationDots = paginationWithDots(data.productions.current_page, data.productions.last_page);
                        if (data.productions.last_page > 1) {
                            if (data.productions.current_page != 1) {
                                pagination.append('<li class="page-item d-none d-sm-inline-block"><a class="page-link" data-page="' + (data.productions.current_page - 1) + '" href="#">Пред</a></li>');
                            }
                        }
                        for (let item of paginationDots) {
                            console.log(item, data.productions.current_page);
                            if (item == '...') {
                                console.log(item == '...');
                                pagination.append('<li class="page-item disabled"><a class="page-link disabled" disabled onclick="event.preventDefault()">' + item + '</a></li>');
                            } else if (item == data.productions.current_page) {
                                pagination.append('<li class="page-item active"><a class="page-link" data-page="' + item + '" href="#">' + item + '</a></li>');
                            } else {
                                pagination.append('<li class="page-item"><a class="page-link" data-page="' + item + '" href="#">' + item + '</a></li>');
                            }
                        }
                        if (data.productions.last_page > 1) {
                            if (data.productions.current_page != data.productions.last_page) {
                                pagination.append('<li class="page-item d-none d-sm-inline-block"><a class="page-link" data-page="' + (data.productions.current_page + 1) + '" href="#">След</a></li>');
                            }
                        }
                    }
                    pagination.find('.page-link').each((e, i) => {
                        registerPageButtons($(i));
                    });


                    let result = $('#productions-list').hide().html(data.html).fadeIn('fast');
                    @if(auth()->check())
                    result.find('.favorite').each((e, i) => {
                        registerFavoriteButton($(i));
                    });
                    @endif
                    result.find('.call-btn').each((e, i) => {
                        registerCallButton($(i));
                    });
                    result.find('.div-lazy').each((e, i) => {
                        registerLazyLoad($(i));
                    })
                },
                error: () => {
                    console.log('error');
                }
            })
        }
        function registerLazyLoad(item) {
            item.lazy();
        }
        @if(auth()->check())
        function registerFavoriteButton(item) {
            item.click((e) => {
                e.preventDefault();
                let btn = $(e.currentTarget);
                let id = btn.data('id');
                console.log(id);
                $.ajax({
                    method: "POST",
                    url: '{{ route('production.favorite') }}',
                    data: {
                        'id': id,
                        'user_id': '{{ \Illuminate\Support\Facades\Auth::user()->id }}'
                    },
                    success: data => {
                        console.log(data);
                        if (data.status === 'success') {
                            if (data.isFavorited) {
                                btn.find('.fa-heart').removeClass('far').addClass('fas');
                            } else {
                                btn.find('.fa-heart').removeClass('fas').addClass('far');
                            }
                        }
                    },
                    error: () => {
                        console.log('error');
                    }
                })
            });
        }
        @endif
        function registerCallButton(item) {
        }
        fetchProductions(params);
    </script>
    <script>
        $.fn.extend({
            treed: function (o) {
                var openedClass = 'fa-plus';
                var closedClass = 'fa-minus';
                if (typeof o != 'undefined'){
                    if (typeof o.openedClass != 'undefined'){
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined'){
                        closedClass = o.closedClass;
                    }
                }
                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    });
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function(){
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        $('#tree').treed();
    </script>
@endpush
