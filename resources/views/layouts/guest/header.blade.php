<div class="header-content d-flex flex-wrap align-items-center">
    <div class="logo">
        <a href="{{ route('index') }}" title="">
            <img src="{{ asset('assets/ratb/logo.png') }}" alt="" width="162" height="57">
        </a>
    </div><!--logo end-->
    <ul class="contact-add d-flex flex-wrap">
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
            </div><!--contact-info end-->
        </li>
        <li>
            <div class="contact-info flex flex-start">
                <img src="{{ asset('assets/img/icon2.png') }}" class="w-5 h-5 mr-2 object-contain" alt="">
                <div class="contact-tt">
                    <h4>Jam Belajar</h4>
                    <span>Senin - Sabtu 07:30 - 11:00</span>
                </div>
            </div><!--contact-info end-->
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
            </div><!--contact-info end-->
        </li>
    </ul><!--contact-information end-->
    <div class="menu-btn">
        <a href="#">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
        </a>
    </div><!--menu-btn end-->
</div><!--header-content end-->