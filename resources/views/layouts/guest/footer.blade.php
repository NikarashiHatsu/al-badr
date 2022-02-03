<footer>
    <div class="container">

        <div class="top-footer">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-about">
                        <img src="{{ asset('/assets/ratb/logo.png') }}" alt="" width="162" height="57">
                        <p>Situs resmi RA Thola'al Badr. Seluruh hak cipta, tema, galeri, dan narasi tetap menjadi milik masing-masing individual/korporat.</p>
                    </div>
                    <!--widget-about end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact">
                        <ul class="contact-add">
                            <li>
                                <div class="contact-info flex flex-start">
                                    <img src="{{ asset('assets/img/icon1.png') }}" class="w-5 h-5 mr-2 object-contain" alt="">
                                    <div class="contact-tt">
                                        <h4>WhatsApp</h4>
                                        <span>
                                            <a href="https://wa.me/{{ strip_tags($site_settings->where('type', 'whatsapp')->first()->content) }}">
                                                {!! $site_settings->where('type', 'whatsapp')->first()->content !!}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info flex flex-start">
                                    <img src="{{ asset('assets/img/icon2.png') }}" class="w-5 h-5 mr-2 object-contain" alt="">
                                    <div class="contact-tt">
                                        <h4>Jam Belajar</h4>
                                        <span>Senin - Sabtu 07:30 - 11:00</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info flex flex-start">
                                    <img src="{{ asset('assets/img/icon3.png') }}" class="w-5 h-5 mr-2 object-contain" alt="">
                                    <div class="contact-tt">
                                        <h4>Alamat</h4>
                                        <span>
                                            {!! $site_settings->where('type', 'short_address')->first()->content !!}
                                        </span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                        </ul>
                    </div>
                    <!--widget-contact end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-links">
                        <h3 class="widget-title">Tautan Lain</h3>
                        <ul>
                            <li><a href="{{ route('index') }}" title="">Home</a></li>
                            <li><a href="{{ route('sejarah') }}" title="">Sejarah</a></li>
                            <li><a href="{{ route('visi_dan_misi') }}" title="">Visi & Misi</a></li>
                            <li><a href="{{ route('prestasi') }}" title="">Prestasi</a></li>
                            <li><a href="{{ route('kontak') }}" title="">Kontak</a></li>
                        </ul>
                    </div>
                    <!--widget-links end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-iframe">
                        {!! $site_settings->where('type', 'small_google_map')->first()->content !!}
                    </div>
                    <!--widget-iframe end-->
                </div>
            </div>
        </div>
        <!--top-footer end-->

        <div class="bottom-footer">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>©2020 Shelly - Modified by Dev's Note</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="social-links">
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
            </div>
        </div>
        <!--bottom-footer end-->

    </div>
</footer>
<!--footer end-->