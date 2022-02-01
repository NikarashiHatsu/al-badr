@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Kontak</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Kontak</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="page-content">
    <div class="container">
        <div class="mdp-map">
            {!! $big_google_map->content !!}
        </div><!--mdp-map end-->
        <div class="mdp-contact">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mdp-our-contacts">
                        <h3>Kontak Kami</h3>
                        <ul>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon15.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>WhatsApp</h4>
                                        <span>
                                            <a href="https://wa.me/{{ strip_tags($whatsapp->content) }}">
                                                {!! $whatsapp->content !!}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon17.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Alamat</h4>
                                        <span>
                                            {!! $address->content !!}
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon16.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Jam Belajar</h4>
                                        <span>Senin - Sabtu 07:30 - 11:00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!--mdp-our-contacts end-->
                </div>
            </div>
        </div><!--mdp-contact end-->
    </div>
</section><!--page-content end-->
@endsection