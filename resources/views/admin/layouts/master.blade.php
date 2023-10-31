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
        <header class="header header-sticky">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-menu') }}"></use>
                    </svg>
                </button>
                <a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="{{ asset('icons/brand.svg#full') }}"></use>
                    </svg>
                </a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                </ul>
                <ul class="header-nav ms-auto">

                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <a class="dropdown-item" href="{{ route('admin.profile.show') }}">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg>
                                {{ __('My profile') }}
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg class="icon me-2">
                                        <use xlink:href="{{ asset('icons/coreui.svg#cil-account-logout') }}"></use>
                                    </svg>
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            @yield('header')
        </header>
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
