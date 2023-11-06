@extends('vendor.layouts.master')
@section('vendor')
    <div class="col-12">
        <div class="d-flex align-items-center justify-content-center h-100">
            <h1>Hello {{Auth::user()->name}}</h1>
        </div>
    </div>
@endsection