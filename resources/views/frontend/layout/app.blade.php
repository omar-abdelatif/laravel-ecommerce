<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/icons/favicon.svg" />
    <link href="assets/frontend/css/vendors/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/frontend/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/frontend/css/main.css">
</head>
<body>
    @yield('siteModals')
    @include('frontend.layout.header')
    <main class="main">
        @yield('site')
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="assets/frontend/preloader/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layout.footer')
    </main>
    <!-- Vendor JS-->
    <script src="assets/frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/frontend/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/frontend/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/frontend/js/plugins/slick.js"></script>
    <script src="assets/frontend/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/frontend/js/plugins/wow.js"></script>
    <script src="assets/frontend/js/plugins/jquery-ui.js"></script>
    <script src="assets/frontend/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/frontend/js/plugins/magnific-popup.js"></script>
    <script src="assets/frontend/js/plugins/select2.min.js"></script>
    <script src="assets/frontend/js/plugins/waypoints.js"></script>
    <script src="assets/frontend/js/plugins/counterup.js"></script>
    <script src="assets/frontend/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/frontend/js/plugins/images-loaded.js"></script>
    <script src="assets/frontend/js/plugins/isotope.js"></script>
    <script src="assets/frontend/js/plugins/scrollup.js"></script>
    <script src="assets/frontend/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/frontend/js/plugins/jquery.theia.sticky.js"></script>
    <script src="assets/frontend/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="assets/frontend/js/main.js"></script>
    <script src="assets/frontend/js/shop.js"></script>
</body>
</html>