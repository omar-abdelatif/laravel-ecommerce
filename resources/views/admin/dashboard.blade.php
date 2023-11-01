@extends('admin.layouts.master')
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
    <div class="col-12">
        <div class="d-flex align-items-center justify-content-center h-100">
            <h1>Hello Admin {{Auth::user()->name}}</h1>
        </div>
    </div>
@endsection