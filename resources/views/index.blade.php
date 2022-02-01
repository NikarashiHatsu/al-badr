@extends('layouts.guest')

@section('banner')
<section class="main-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                    <h2>Selamat datang di <span>RA Thola'al Badr</span></h2>
                    <p>
                        Berdiri sejak tahun 1998, RA Thola'al Badr berkomitmen untuk menerapkan sistem pendidikan
                        belajar sambil bermain, bermain seraya belajar. Mengintegrasikan kurikulum pembelajaran
                        dengan seluruh aspek kehidupan anak serta pengembangan karakter anak.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
                    <img src="<?= asset('assets/ratb/img_1.webp') ?>" alt="">
                </div>
                <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="about-us-section">
    <div  class="container">
        <div class="section-title text-center">
            <h2>Mencetak lulusan yang <span>CerDAS</span></h2>
            <p>Lembaga yang CerDAS adalah lembaga yang mampu mengelola potensinya untuk mencapai hasil pembelajaran maksimal demi terwujudnya tujuan pendidikan nasional.</p>
        </div><!--section-title end-->
        <div class="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                            <img src="<?= asset('assets/img/icon5.png') ?>" alt="">
                            <h3>Ceria</h3>
                            <p>Optimisme dalam menatap, menyongsong, dan menghadapi masa depan dengan segala masalah dan tantangannya.</p>
                        </div><!--abt-col end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                            <img src="<?= asset('assets/img/icon7.png') ?>" alt="">
                            <h3>Berbudaya</h3>
                            <p>Mengenali, memahami, dan melestarikan nilai-nilai positif budaya serta kearifan lokal sebagai titis waris leluhur.</p>
                        </div><!--abt-col end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <img src="<?= asset('assets/img/icon8.png') ?>" alt="">
                            <h3>Agamis</h3>
                            <p>Mengenali, memahami, dan mengamalkan nilai-nilai ajaran Islam sebagai pedoman hidup setiap muslim.</p>
                        </div><!--abt-col end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <img src="<?= asset('assets/img/icon9.png') ?>" alt="">
                            <h3>Seimbang</h3>
                            <p>Membentuk pribadi seimbang dalam prinsip duniawi & ukhrowi, pengembangan otak kiri & kanan, jiwa & raga, IPTEK & IMTAKnya.</p>
                        </div><!--abt-col end-->
                    </div>
                </div>
            </div>
        </div><!--about-rw end-->
        <div class="abt-img">
            <ul class="masonary">
                <li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_2.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_2.webp') ?>" alt=""></a></li>
                <li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_3.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_3.webp') ?>" alt=""></a></li>
                <li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_4.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_4.webp') ?>" alt=""></a></li>
                <li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_5.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_5.webp') ?>" alt=""></a></li>
                <li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_6.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_6.webp') ?>" alt=""></a></li>
                <li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_7.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_7.webp') ?>" alt=""></a></li>
                <li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_8.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_8.webp') ?>" alt=""></a></li>
                <li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_9.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_9.webp') ?>" alt=""></a></li>
                <li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_10.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_10.webp') ?>" alt=""></a></li>
                <li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="<?= asset('assets/ratb/img_11.webp') ?>" data-group="set1" title="" class="html5lightbox"><img src="<?= asset('assets/ratb/img_11.webp') ?>" alt=""></a></li>
            </ul>
        </div><!-- abt-img end-->
    </div>
</section><!--about-us-section end-->

<section class="classes-section">
    <div class="container">
        <div class="sec-title">
            <h2>Guru-guru kami</h2>
            <p>Sosok hebat dibalik terciptanya lulusan-lulusan yang berkualitas dan CerDAS</p>
        </div><!--sec-title end-->
        <div class="classes-sec">
            <div class="row classes-carousel">
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3">
                        <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                            <div class="class-thumb">
                                <img src="{{ asset($teacher->photo_url) }}" alt="" class="w-100" style="height: 400px !important">
                            </div>
                            <div class="class-info">
                                <h3>{{ $teacher->name }}</h3>
                                <p>{{ $teacher->place_of_birth}}, {{ $teacher->date_of_birth_formatted }}</p>
                                <p>{{ $teacher->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!--classes-sec end-->
    </div>
</section><!--classes-section end-->
@endsection