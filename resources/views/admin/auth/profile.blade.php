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
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('admin')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('My profile') }}
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-5 w-50 mx-auto text-center">
                <p class="mb-0">
                    <b>{{session('success')}}</b>
                </p>
            </div>
        @elseif ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger mt-3 w-50 mx-auto text-center">
                    <p class="mb-0">
                        <b>{{$error}}</b>
                    </p>
                </div>
            @endforeach
        @endif
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
            <div class="row">
                <div class="col-4">
                    <div class="card-body bg-body-tertiary mt-3 rounded border border-3 border-dark">
                        <div class="input-group mb-3 mt-3">
                            <img src="{{ auth()->user()->img ? asset("assets/admin/imgs/users/".auth()->user()->img) : 'https://placehold.co/150' }}" width="130" alt="{{auth()->user()->img}}" class="img-fluid rounded-circle text-center mx-auto">
                        </div>
                        <div class="input-group mb-3 flex-column text-center">
                            <h3 class="mb-0">{{auth()->user()->name}}</h3>
                            <small>{{auth()->user()->email}}</small>
                        </div>
                        <hr>
                        <div class="data">
                            <div class="form-control mb-3">
                                <span>
                                    <i class="fa-solid fa-globe ps-2 pe-2"></i>
                                    <b>Website:</b>
                                </span>
                                <span class="text-decoration-underline">{{auth()->user()->website}}</span>
                            </div>
                            <div class="form-control mb-3">
                                <span>
                                    <i class="fa-brands fa-facebook-f ps-2 pe-2"></i>
                                    <b>Facebook:</b>
                                </span>
                                <span>
                                    <span>{{auth()->user()->fb}}</span>
                                </span>
                            </div>
                            <div class="form-control">
                                <span>
                                    <i class="fa-brands fa-whatsapp ps-2 pe-2"></i>
                                    <b>Whatsapp:</b>
                                </span>
                                <span>
                                    <span>{{auth()->user()->whatsapp}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="{{ __('UserName') }}" value="{{ auth()->user()->username }}">
                            @error('username')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}">
                            @error('email')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" value="{{ old('password', auth()->user()->password) }}" name="password" placeholder="{{ __('New password') }}">
                            @error('password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-phone') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" placeholder="{{ __('Phone') }}" value="{{ old('phone', auth()->user()->phone) }}">
                            @error('phone')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-address-book') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('address') is-invalid @enderror" type="tel" name="address" placeholder="{{ __('Address') }}" value="{{ old('address', auth()->user()->address) }}">
                            @error('address')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="view-img text-center">
                            <img src="{{auth()->user()->img ? asset("assets/admin/imgs/".auth()->user()->img) : 'https://placehold.co/150'}}" width="130" class="rounded-circle" id="showImage" alt="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-image') }}"></use>
                                </svg>
                            </span>
                            <input class="form-control @error('img') is-invalid @enderror" id="image" type="file" name="img" value="{{ auth()->user()->img }}">
                            @error('img')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-footer mt-4">
                        <button class="btn btn-sm btn-primary" type="submit">{{ __('Submit') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
