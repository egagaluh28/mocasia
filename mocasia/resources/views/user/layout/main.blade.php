<!DOCTYPE html>
<html lang="en">

<head>
    <title>MOCASIA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/logo mocasiaaaaaaaaaaaaa.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightbox2/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
</head>

<body class="animsition">

    <!-- Header -->
    @include('user.partials.header')

    <!-- Main content area starts -->
    <div>
        @yield('user.container')
        @include('user.partials.footer')
    </div>
    <!-- Footer -->

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="lnr lnr-chevron-up"></span>
        </span>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/revo-custom.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-custom.js') }}"></script>
    <script src="{{ asset('assets/vendor/parallax100/parallax100.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
