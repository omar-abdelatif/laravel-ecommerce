<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title', 'Omar Abdelatif')</title>
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui-pro@4.6.3/dist/css/coreui.min.css">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">
</head>
<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <h1 class="text-center sidebar-brand-full">Dashboard</h1>
            <h1 class="text-center sidebar-brand-narrow">O</h1>
        </div>
        @include('admin.layouts.navigation')
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @yield('header')
        <div class="body flex-grow-1 px-3">
            <div class="container">
                <div class="row">
                    @yield('admin')
                </div>
            </div>
        </div>
        <footer class="footer">
            <div>
                <a href="https://coreui.io">CoreUI </a>
                <a href="https://coreui.io">Bootstrap Admin Template</a>
                &copy; 2021 creativeLabs.
            </div>
            <div class="ms-auto">
                Powered by&nbsp;
                <a href="https://coreui.io/bootstrap/ui-components/">
                    CoreUI UI Components
                </a>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/@coreui/coreui-pro@4.6.3/dist/js/coreui.bundle.js"></script>
    <script src="{{asset('assets/admin/js/custom.js')}}"></script>
</body>
</html>
