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
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('admin')
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
@endsection