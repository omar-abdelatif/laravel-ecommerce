@extends('admin.layouts.master')
@section('header')
    <div class="header-divider"></div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 w-100">
                    <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.inactive.vendor') }}">InActive Vendors</a>
                            </li>
                            <li class="breadcrumb-item active">{{$details->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('admin')
    <div class="card mb-4 mt-4">
        <div class="card-header mt-3 rounded">
            <h1 class="text-center">
                {{ __('InActive Vendor Details') }}
            </h1>
        </div>
        <form action="{{route('admin.vendor.approve')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $details->id }}"/>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" type="text" name="name" placeholder="{{ __('Name') }}" value="{{ $details->name }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" type="text" name="email" placeholder="{{ __('Email') }}" value="{{ $details->email }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" type="password" name="password" placeholder="{{ __('New password') }}" autocomplete="off">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-phone') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" type="tel" name="phone" placeholder="{{ __('Phone') }}" value="{{ $details->phone }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-address-book') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" type="tel" name="address" placeholder="{{ __('Address') }}" value="{{ $details->address }}">
                        </div>
                        <div class="view-img text-center">
                            <img src="{{$details->img ? asset("assets/vendor/imgs/".$details->img) : 'https://placehold.co/150'}}" width="130" class="rounded-circle" id="showImage" alt="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-image') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control" id="image" type="file" name="img" value="{{ $details->img }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-body bg-body-tertiary mt-3 rounded border border-3 border-dark">
                        <div class="input-group mb-3 mt-3">
                            <img src="{{ $details->img ? asset("assets/vendor/imgs/users/".$details->img) : 'https://placehold.co/150' }}" width="130" alt="{{$details->img}}" class="img-fluid rounded-circle text-center mx-auto">
                        </div>
                        <div class="input-group mb-3 flex-column text-center">
                            <h3 class="mb-0">{{$details->name}}</h3>
                            <small>{{$details->email}}</small>
                        </div>
                        <hr>
                        <div class="data">
                            <div class="form-control mb-3">
                                <span>
                                    <i class="fa-solid fa-globe ps-2 pe-2"></i>
                                    <b>Website:</b>
                                </span>
                                <span class="text-decoration-underline">{{$details->website}}</span>
                            </div>
                            <div class="form-control mb-3">
                                <span>
                                    <i class="fa-brands fa-facebook-f ps-2 pe-2"></i>
                                    <b>Facebook:</b>
                                </span>
                                <span>
                                    <span>{{$details->fb}}</span>
                                </span>
                            </div>
                            <div class="form-control">
                                <span>
                                    <i class="fa-brands fa-whatsapp ps-2 pe-2"></i>
                                    <b>Whatsapp:</b>
                                </span>
                                <span>
                                    <span>{{$details->whatsapp}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-footer mt-4">
                        @if ($details->status === 'inactive')
                            <button class="btn btn-danger w-100" type="submit">
                                <b>{{ __('Active Vendor') }}</b>
                            </button>
                        @elseif ($details->status === 'active')
                            <button class="btn btn-success w-100" type="submit">
                                <b>{{ __('Activated') }}</b>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection