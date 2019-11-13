@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top" style="position: relative">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-9">
                <h1>{{ $blog->title }}</h1>
                <p class="oclock">{{ $blog->created_at }}</p>
{{--                <p class="tegi">Блог компании Флант,--}}
{{--                    Карьера в IT-индустрии,--}}
{{--                    IT-компании</p>--}}
                <div class="">
{{--                    <img src="{{ asset('img/production.png') }}" alt="">--}}
                    <img class="img-fluid" src="{{ asset('storage/'.$blog->logo) }}" alt="">
                </div>
                <p class="description_blog pt-3">
                    {{$blog->excerpt}}
                </p>
                <div class="row ">
                    {!! $blog->content !!}
                </div>
            </div>
            <div class="col-3">
                <div class="default-block">
                    <div class="default-block__header">
                        <h2 class="default-block__header-title">Блог в Texmart</h2>
                    </div>
                    <div class="default-block__content">
                        <ul class="content-list">
                            @foreach($blogs as $blog)
                            <li>
                                <h3 class="post-info__title">
                                    <a href="{{ route('blog_show', $blog) }}" class="post-info__title">{{ $blog->title }}</a>
                                </h3>
                                <div class="post_info__meta d-flex p-3">
                                    <p class="p-3">просмотры</p>
                                    <p>коменты</p>
                                </div>
                            </li>
                            @endforeach
{{--                            <li>--}}
{{--                                <h3 class="post-info__title">--}}
{{--                                    <a href="#" class="post-info__title">Автоматизация End-2-End тестирования комплексной информационной системы. Часть 1. Организационная</a>--}}
{{--                                </h3>--}}
{{--                                <div class="post_info__meta d-flex p-3">--}}
{{--                                    <p class="p-3">просмотры</p>--}}
{{--                                    <p>коменты</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h3 class="post-info__title">--}}
{{--                                    <a href="#" class="post-info__title">Автоматизация End-2-End тестирования комплексной информационной системы. Часть 1. Организационная</a>--}}
{{--                                </h3>--}}
{{--                                <div class="post_info__meta d-flex p-3">--}}
{{--                                    <p class="p-3">просмотры</p>--}}
{{--                                    <p>коменты</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h3 class="post-info__title">--}}
{{--                                    <a href="#" class="post-info__title">Автоматизация End-2-End тестирования комплексной информационной системы. Часть 1. Организационная</a>--}}
{{--                                </h3>--}}
{{--                                <div class="post_info__meta d-flex p-3">--}}
{{--                                    <p class="p-3">просмотры</p>--}}
{{--                                    <p>коменты</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
