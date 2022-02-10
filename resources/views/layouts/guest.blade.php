<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raudhatul Athfal Thola' Al-Badr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="template-description" content="Shelly - Website" />
    <meta name="template-author" content="merkulove">
    <meta name="template-keywords" content="" />
    <meta name="description" content="Website resmi RA Thola'al Badr" />
    <meta name="author" content="Aghits Nidallah">
    <meta name="keywords" content="Website RA Thola'al Badr Cirebon Gunung Jati" />
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('assets/ratb/logo_only.png') . '?v=' . config('app.version') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') . '?v=' . config('app.version') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') . '?v=' . config('app.version') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') . '?v=' . config('app.version') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') . '?v=' . config('app.version') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') . '?v=' . config('app.version') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') . '?v=' . config('app.version') }}">
</head>

<body>
    @inject('site_settings', \App\Models\SiteSettings::class)

    <div class="wrapper">
		<div class="main-section">
            <header>
                <div class="container">
                    @include('layouts.guest.header')
                    @include('layouts.guest.navigation')
                </div>
            </header>

            @include('layouts.guest.responsive-nav')
            @yield('banner')
        </div>

        @yield('content')
        @include('layouts.guest.footer')
    </div>

    <script src="<?= asset('assets/js/jquery.js') ?>"></script>
    <script src="<?= asset('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('assets/js/isotope.js') ?>"></script>
    <script src="<?= asset('assets/js/html5lightbox.js') ?>"></script>
    <script src="<?= asset('assets/js/slick.min.js') ?>"></script>
    <script src="<?= asset('assets/js/tweenMax.js') ?>"></script>
    <script src="<?= asset('assets/js/scripts.js') ?>"></script>
</body>

</html>