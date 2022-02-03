<div class="blog-post">
    <div class="blog-thumbnail">
        <a href="{{ route('blog_detail', $blog->slug) }}" title="">
            <img
                src="{{ asset($blog->thumbnail_url) }}"
                alt="Gambar thumbnail {{ $blog->title }}"
                class="w-100"
            />
        </a>
        <span class="category">
            {{ $blog->categories->map(function($cat) { return $cat->category->name; })->join(', ') }}
        </span>
    </div>
    <div class="blog-info">
        <ul class="flex items-end meta">
            <li>
                <a>
                    {{ $blog->created_at_formatted }}
                </a>
            </li>
            <li>
                <a href="#" title="">
                    oleh {{ $blog->creator->name }}
                </a>
            </li>
            <li>
                <div class="flex align-bottom">
                    <img
                        src="assets/img/icon13.png"
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
        <h3>
            <a href="{{ route('blog_detail', $blog->slug) }}" title="">
                {{ $blog->title }}
            </a>
        </h3>
        <div class="line-clamp-3">
            {!! $blog->description !!}
        </div>
        <a href="{{ route('blog_detail', $blog->slug) }}" title="" class="read-more">
            Baca selengkapnya
            <i class="fa fa-long-arrow-alt-right"></i>
        </a>
    </div>
</div>
<!--blog-post end-->
