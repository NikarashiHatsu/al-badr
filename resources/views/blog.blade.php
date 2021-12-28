@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Blog</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Blog</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="page-content">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-section p-0 posts-page">
                    <div class="blog-posts">
                        <x-blog.standard />
                        <x-blog.standard />
                        <x-blog.without-image />
                        <x-blog.gallery />
                        <x-blog.quote />
                        <x-blog.quote-no-bg />
                        <x-blog.video />
                        <x-blog.title-less />
                        <x-blog.chat />
                        <x-blog.title-only />
                    </div>
                </div>

                <div class="mdp-pagiation">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-3">
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
            </div>
        </div>
    </div>
</section>
@endsection