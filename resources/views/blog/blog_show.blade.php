@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <section class="mt-5" style="position: relative; height: 200px; background-image: url('{{ asset('storage/'.$blog->logo) }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="backdrop"></div>
        <div class="container h-100 position-relative">
            <div class="row h-100 align-items-end justify-content-center">
                <div class="col-auto pb-4">
                    <h1 class="text-center text-white">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-9">
                <p class="oclock">{{ $blog->created_at }}</p>
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
