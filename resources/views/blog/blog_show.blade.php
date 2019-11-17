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
            <div class="row justify-content-start mt-2">
                <div class="col-auto">
                    <p class="font-weight-bold">{{ \Carbon\Carbon::make($blog->created_at)->format('d.m.Y') }}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="default-block">
                    <div class="default-block__header">
                        <h2 class="default-block__header-title">Блог в Texmart</h2>
                    </div>
                    <div class="default-block__content">
                            @foreach($blogs as $blog)
                            <div class="single-post-area wow fadeInUpBig" data-wow-delay="400ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUpBig;">
                                <a href="{{ route('blog_show', $blog) }}" class="post-thumbnail"><img src="{{asset('storage/'.$blog->logo)}}" alt=""></a>
                                {{--                        <a href="#" class="btn post-catagory">Camera</a>--}}
                                <div class="post-content">
                                    <div class="post-meta">
                                        <p class="oclock text-white">{{ \Carbon\Carbon::make($blog->created_at)->format('d.m.Y') }}</p>
                                        {{--                                <a href="#">3 Comment</a>--}}
                                    </div>
                                    <a href="{{ route('blog_show', $blog) }}" class="post-title">{{ $blog->title }}</a>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
