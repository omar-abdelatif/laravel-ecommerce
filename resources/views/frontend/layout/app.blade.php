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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/icons/favicon.svg')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
</head>
<body>
    @yield('siteModals')
    @yield('siteHeader')
    <main class="main">
        @yield('site')
        @include('frontend.layout.footer')
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="{{asset('assets/imgs/preloader/loading.gif')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
    @yield('scripts')
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/shop.js')}}"></script>
</body>
</html>