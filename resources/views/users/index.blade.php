@extends('layouts.app')

@section('header')
    <header class="header header-sticky mb-4 d-block">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
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
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
            <ul class="header-nav ms-auto">

            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown">
                    <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                            </svg>
                            {{ __('My profile') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
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
        <div class="header-divider"></div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Users') }}
        </div>

        <div class="alert alert-info m-3" role="alert">Sample table page</div>

        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
@endsection
