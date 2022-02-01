<div class="navigation-bar d-flex flex-wrap align-items-center">
    <nav>
        <ul>
            <li>
                <a href="{{ route('index') }}">Beranda</a>
            </li>
            <li>
                <a href="{{ route('sejarah') }}">Sejarah</a>
            </li>
            <li>
                <a href="{{ route('visi_dan_misi') }}">Visi & Misi</a>
            </li>
            <li>
                <a href="{{ route('prestasi') }}">Prestasi</a>
            </li>
            <li>
                <a href="{{ route('kontak') }}">Kontak</a>
            </li>
            <li>
                <a href="{{ route('blog') }}">Blog</a>
            </li>
        </ul>
    </nav>
    <!--nav end-->
    <ul class="social-links ml-auto">
        @if (!empty($site_settings->where('type', 'facebook')->first()->content))
            <li><a href="{{ strip_tags($site_settings->where('type', 'facebook')->first()->content) }}" title=""><i class="fab fa-facebook-f"></i></a></li>
        @endif
        @if (!empty($site_settings->where('type', 'instagram')->first()->content))
            <li><a href="{{ strip_tags($site_settings->where('type', 'instagram')->first()->content) }}" title=""><i class="fab fa-instagram"></i></a></li>
        @endif
        @if (!empty($site_settings->where('type', 'twitter')->first()->content))
            <li><a href="{{ strip_tags($site_settings->where('type', 'twitter')->first()->content) }}" title=""><i class="fab fa-twitter"></i></a></li>
        @endif
        @if (!empty($site_settings->where('type', 'email')->first()->content))
            <li><a href="mailto:{{ strip_tags($site_settings->where('type', 'email')->first()->content) }}" title=""><i class="fab fa-google-plus"></i></a></li>
        @endif
    </ul>
</div>
<!--navigation-bar end-->