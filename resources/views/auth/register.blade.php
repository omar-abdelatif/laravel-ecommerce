@extends('layouts.guest')

@section('content')
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <h1>Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                    </svg>
                                </span>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                                @error('name')
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
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="{{ __('User Name') }}" required autocomplete="name" autofocus>
                                @error('username')
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
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="{{ __('Email') }}" required autocomplete="email">
                                @error('email')
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
                                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" placeholder="{{ __('address') }}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                    </svg>
                                </span>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                @error('password')
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
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('icons/coreui.svg#cil-phone') }}"></use>
                                    </svg>
                                </span>
                                <input class="form-control @error('phone') is-invalid @enderror" type="number" name="phone" placeholder="{{ __('Phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-block btn-success w-100" type="submit">
                                <b>{{ __('Register') }}</b>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="mb-0 mt-3 text-center">
                    Already have an Account
                    <a href="{{route('login')}}">Sign In!</a>
                </p>
            </div>
        </div>
    </div>
@endsection
