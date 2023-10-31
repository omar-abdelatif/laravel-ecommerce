@extends('admin.layouts.master')
@section('admin')
    <div class="col-12">
        <div class="d-flex align-items-center justify-content-center h-100">
            <h1>Hello Admin {{Auth::user()->name}}</h1>
        </div>
    </div>
@endsection