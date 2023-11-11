<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    @vite('resources/js/app.js')
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/icons/favicon.svg')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
</head>
<body>
    @yield('siteModals')
    @include('frontend.layout.header')
    <main class="main">
        @yield('site')
        @include('frontend.layout.footer')
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="{{asset('assets/frontend/imgs/preloader/loading.gif')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/counterup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/custom-parallax.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.elevateZoom.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/leaflet.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/slick.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/slider-range.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/TweenMax.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    <script src="{{asset('assets/frontend/js/shop.js')}}"></script>
</body>
</html>