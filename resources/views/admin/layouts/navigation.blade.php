<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Dashboard') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Categories') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.subCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Sub Categories') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Products') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Invoices') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Vendors') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Orders') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.allCategories') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Payment Methods') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
            </svg>
            {{ __('All Users') }}
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('About us') }}
        </a>
    </li> --}}

    {{-- <li class="nav-group" aria-expanded="false">
        <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-star') }}"></use>
            </svg>
            Two-level menu
        </a>
        <ul class="nav-group-items" style="height: 0px;">
            <li class="nav-item">
                <a class="nav-link" href="#" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>
                    </svg>
                    Child menu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>
                    </svg>
                    Child menu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>
                    </svg>
                    Child menu
                </a>
            </li>
        </ul>
    </li> --}}
</ul>
