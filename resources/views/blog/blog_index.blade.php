@extends('layouts.app')
@section('content')
    <section class="bg-texmart-sidebar fixed-top">
        <div class="container">
            @include('blocks.header')
        </div>
    </section>
    <div class="alime-blog-area section-padding-80-0 mb-70 pt-5 mt-5">
        <div class="container">
            <div class="row">
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUpBig;">--}}
{{--                        <a href="{{ route('blog.blog_show', $blog) }}" class="post-thumbnail"><img src="{{asset('img/51.jpg')}}" alt=""></a>--}}
{{--                        <a href="#" class="btn post-catagory">Photography</a>--}}
{{--                        <div class="post-content">--}}
{{--                            <div class="post-meta">--}}
{{--                                <a href="#">May 19, 2019</a>--}}
{{--                                <a href="#">3 Comment</a>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="post-title">{{ $blogs->title }}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @foreach($blogs as $blog)
                <div class="col-12 col-sm-6 col-lg-3">
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
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                @if($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row pl-4 ml-0 pt-3">
                        {{ $blogs->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/alime.bundle.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script>
        $('li').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>
@endpush
