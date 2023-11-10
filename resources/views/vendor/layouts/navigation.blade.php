@php
    $id= Auth::user()->id;
    $vendorId = App\Models\User::find($id);
    $status = $vendorId->status;
@endphp
<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    @if ($status === 'inactive')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('vendor.dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
                </svg>
                {{ __('Dashboard') }}
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('vendor.dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
                </svg>
                {{ __('Dashboard') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('vendor.products') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
                </svg>
                {{ __('Products') }}
            </a>
        </li>
    @endif
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
