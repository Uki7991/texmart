<div class="container mt-5 pb-5 text-center pt-3">
    <a href="{{ route('blog_index') }}" class="text-center h2 " style="color: #e99b33 !important;padding-bottom: 25px;text-align: center">
        Наш Блог
    </a>
    <div class="row pt-3">
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

    <div class="pt-3">
        <a href="{{ route('blog_index') }}"><button type="submit"
                class="btn btn-texmart-orange text-white btn-lg px-5 py-2 scale-on-hover "> Все новости</button></a>
    </div>
</div>
