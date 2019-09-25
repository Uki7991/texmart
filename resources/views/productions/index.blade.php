@extends('layouts.app')

@section('content')

    @include('partials.header', ['shadow' => 'shadow'])

    <h1 class="" style="display: none">Production</h1>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3">
                @include('partials.left_sidebar', ['toggle' => true])
            </div>
            <div class="col" id="productions-list">

            </div>
        </div>
    </div>
    @include('partials.modals.message_modal')
@stop

@push('scripts')
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
            $.ajax({
                url: '{{ route('productions.filter') }}',
                data: {
                    params: params,
                    type: '{{ request('type') }}'
                },
                success: data => {
                    console.log(data);
                    let result = $('#productions-list').hide().html(data).fadeIn('fast');
                    @if(auth()->check())
                        result.find('.favorite').each((e, i) => {
                            registerFavoriteButton($(i));
                        });
                    @endif
                    result.find('.call-btn').each((e, i) => {
                        registerCallButton($(i));
                    });
                },
                error: () => {
                    console.log('error');
                }
            })
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
