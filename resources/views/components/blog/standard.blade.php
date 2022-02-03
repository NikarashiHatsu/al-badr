<div class="blog-post">
    <div class="blog-thumbnail">
        <a href="#" title="">
            <img
                src="{{ asset($blog->thumbnail) }}"
                alt="Gambar thumbnail {{ $blog->title }}"
                class="w-100"
            />
        </a>
        <span class="category">
            {{-- English, Teachers, Shelly --}}
        </span>
    </div>
    <div class="blog-info">
        <ul class="meta">
            <li>
                <a href="#" title="">
                    {{ $blog->created_at_formatted }}
                </a>
            </li>
            <li>
                <a href="#" title="">
                    oleh {{ $blog->creator->name }}
                </a>
            </li>
            {{-- <li>
                <img
                    src="assets/img/icon13.png"
                    alt=""
                />
                <a href="#" title="">
                    Teachers,
                </a>
                <a href="#" title="">
                    School
                </a>
            </li> --}}
        </ul>
        <h3>
            <a href="post.html" title="">
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
