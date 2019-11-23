@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="left-customer col-12 col-lg-8">
                <div class="block-customer">
                    <div class="date-customer">{{ \Carbon\Carbon::make($announce->created_at)->format('d.m.Y') }}</div>
                    <h1 class="customer-title" style="font-size: 1.5rem">
                        {{ $announce->content }}
                    </h1>
{{--                    <div class="footer_block">--}}
{{--                        <div class="item-detail_tags">--}}
{{--                            <div class="tags">--}}
{{--                                <a href="#" class="tag-lg">Женская одежда</a>--}}
{{--                                <a href="#" class="tag-lg">Ткани и фурнитура</a>--}}
{{--                                <a href="#" class="tag-lg">Женская обувь</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="right-customer col-12 col-lg-4">
                <div class="block-top-block">
                    @if(auth()->check())
                        <div class="buttons_customer font-weight-bold h4">
                            <a href="tel:{{ $announce->phone }}">  {{ $announce->phone }}</a>
                        </div>
                    @else
                        <div class="buttons_customer">
                            <a href="{{ route('login') }}" class="btn-c btn-c btn-blue btn-h48 btn-block btn-with-label">
                                <span class="btn-text">Показать контакты</span>
                            </a>
                        </div>
                    @endif
                    <div class="share_customer">
                        <span class="span_share">Поделиться:</span>
                        <div class="social_buttons" style="padding: 4px">
                            <a href="javascript:void(0)" title="vk" class="social-share-btn" data-url="{{ request()->url() }}" data-social="vk" data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">
                                <i class="fab fa-vk mr-3 fa-lg nav-scale"></i>
                            </a>
                            {{--                            <a href="javascript:void(0)" title="instagram" class="social-share-btn" data-url="{{ request()->url() }}" data-social="instagram" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">--}}
                            {{--                                <i class="fab fa-instagram mr-3 fa-lg nav-scale"></i>--}}
                            {{--                            </a>--}}
                            <a href="javascript:void(0)" title="facebook" class="social-share-btn" data-url="{{ request()->url() }}" data-social="facebook" data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">
                                <i class="fab fa-facebook mr-3 fa-lg nav-scale"></i>
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="block-middle-block">--}}
{{--                    <ul class="customer_ul">--}}
{{--                        <li class="customer_ul_li" style="display: flex;flex-wrap: nowrap;">--}}
{{--                            <div style="margin-right: 30px;">--}}
{{--                                <img src="{{ asset('icons/eye_for_customer.png') }}" alt="" class="img_customer">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span class="col_eye">250</span>--}}
{{--                                <p class="customer_text">пользователя просматривали заказ</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li style="display: flex;flex-wrap: nowrap;">--}}
{{--                            <div style="margin-right: 30px;">--}}
{{--                                <img src="{{ asset('icons/user_for_customer.png') }}" alt="" class="img_customer">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span class="col_request">3986</span>--}}
{{--                                <p class="customer_text">уведомлены о заказе</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.social-share-btn').click(e => {
            let btn = $(e.currentTarget);
            let social = btn.data('social');
            let url = btn.data('url');
            let text = btn.data('text');

            if (social == 'facebook') {
                url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            if (social == 'vk') {
                url = 'https://vk.com/share.php?url=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            // if (social == 'instagram') {
            //     window.open($(this).attr("href", 'https://vk.com/share.php?url=' + url), "popupWindow", "width=600,height=600,scrollbars=yes");
            // }
        })
    </script>
@endpush
