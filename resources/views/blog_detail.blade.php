@extends('layouts.guest')

@section('content')
<section class="pager-section blog-version" style="background-image: url('{{ asset($blog->thumbnail) }}')">
    <div class="container">
        <div class="pager-content text-center">
            <ul>
                <li><a href="{{ route('index') }}" title="">Home</a></li>
                <li><a href="{{ route('blog') }}" title="">Blog</a></li>
                <li><span>{{ $blog->title }}</span></li>
            </ul>
            <h2>{{ $blog->title }}</h2>
            <span class="categry">
                {{ $blog->categories->map(function($cat) { return $cat->category->name; })->join(', ') }}
            </span>
            <ul class="flex items-end justify-center meta">
                <li><a href="#" title="">{{ $blog->created_at_formatted }}</a></li>
                <li><a href="#" title="">oleh {{ $blog->creator->name }}</a></li>
                <li>
                    <div class="flex align-bottom">
                        <img
                            src="{{ asset('assets/img/icon13.png') }}"
                            alt=""
                            class="float-left align-bottom"
                        />
                        {!!
                            $blog->categories->map(function($cat) {
                                return "
                                    <a href='#' title='' class='mr-1 !text-xs'>
                                        {$cat->category->name}
                                    </a>
                                ";
                            })->join(' ')
                        !!}
                    </div>
                </li>
            </ul>
        </div><!--pager-content end-->
    </div>
</section><!--pager-section end-->

<section class="page-content p80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-post single">
                    {!! $blog->description !!}
                </div>

                {{-- <div class="mdp-post-comments">
                    <h3 class="mdp-sub-title">Comments</h3>
                    <ul>
                        <li>
                            <div class="mdp-comment d-flex flex-wrap">
                                <div class="mdp-img">
                                    <img src="https://via.placeholder.com/72x72" alt="">
                                </div>
                                <div class="mdp-com">
                                    <h3>Polina Podolski</h3>
                                    <span>25/09/2020</span>
                                    <p>Nullam iaculis elit tempor tellus eleifend, lobortis porta velit hendrerit. Curabitur eu felis maximus, tempus enim a, venenatis tortor. Phasellus elementum massa vel diam rhoncus vulputate.</p>
                                    <a href="#" title="" class="reply-btn"><i class="fa fa-reply"></i>Reply</a>
                                </div>
                            </div><!--mdp-comment end-->
                        </li>
                    </ul>
                </div><!--post-comments end--> --}}

                {{-- <div class="mdp-contact">
                    <div class="comment-area">
                        <h3 class="mdp-sub-title">Add Comment</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="website" placeholder="Website">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit">
                                        <a href="#" title="" class="btn-default">Send Now <i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!--form-submit end-->
                                </div>
                            </div>
                        </form>
                    </div><!--comment-area end-->
                </div><!--mdp-contact end--> --}}
            </div>

            {{-- <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><img src="assets/img/icon4.png" alt=""></button>
                        </form>
                    </div>

                    <x-blog.categories />
                    <x-blog.latest-posts />
                    <x-blog.latest-comments />
                    <x-blog.archives />
                    <x-blog.tags />
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection