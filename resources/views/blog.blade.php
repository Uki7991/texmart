@extends('layouts.app')

@section('content')
    @include('partials.header', ['shadow' => 'shadow'])
    <div class="container">
        <div class="row py-4">
            <div class="col">
                <div class="container bg-white py-3">
                    <div class="row">
                        <div class="col-12">
{{--                            <div class="inside-article">--}}
{{--                                <h2 class="entry-title" itemprop="headline">--}}
{{--                                    <a href="#"></a>--}}
{{--                                </h2>--}}
{{--                                <div class="enty-meta">--}}
{{--                                 <span class="byline">--}}
{{--                                <span class="author card" itemprop="author">--}}
{{--                                  "by"--}}
{{--                                     <a href="#">--}}
{{--                                  <span class="author-name">Jamie</span>--}}
{{--                                     </a>--}}
{{--                                     </span>--}}
{{--                               </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="post-image">--}}
{{--                                <a href=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="entry-summary" itemprop="text">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi consectetur--}}
{{--                                    doloremque et ex expedita--}}
{{--                                    nihil pariatur perferendis perspiciatis, quam quibusdam quidem rem repudiandae ullam--}}
{{--                                    voluptates? Eligendi--}}
{{--                                    exercitationem libero sunt.</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
