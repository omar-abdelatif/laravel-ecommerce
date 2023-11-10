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
                            <li class="breadcrumb-item active">All Vendors</li>
                        </ol>
                        <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_vendors" data-coreui-whatever="@mdo">
                            <b>Add New Vendor</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    {{-- ! Add Category Modal ! --}}
    <div class="modal fade" id="add_vendors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Vendor</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-white">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="subcat" class="text-white">
                                <b>SubCategory</b>
                            </label>
                            <input type="text" class="form-control" name="title" id="subcat" placeholder="{{ __('New SubCategory') }}">
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('admin')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center mt-5">
                <p class="mb-0">{{$error}}</p>
            </div>
        @endforeach
    @endif
    <?php $i =1 ?>
    <div class="table mt-3">
        <table class="table text-center align-middle table-striped table-hover" id="table"  data-order='[[ 0, "asc" ]]' data-page-length='10'>
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Shop Name</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->address}}</td>
                        <td>{{$vendor->phone}}</td>
                        <td>
                            <img src="{{asset('assets/vendor/imgs/users/'.$vendor->img)}}" alt="{{$vendor->img}}" class="rounded-circle" width="50px" height="auto">
                        </td>
                        <td>
                            @if ($vendor->status === 'active')
                                <span class="badge text-bg-success px-3 py-2">{{$vendor->status}}</span>
                            @elseif ($vendor->status === 'inactive')
                                <span class="badge text-bg-danger px-3 py-2">{{$vendor->status}}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.inactive.vendor.details', $vendor->id)}}" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            {{-- @if ($vendor->status === 'active')
                                <span class="badge text-bg-success px-3 py-2">{{$vendor->status}}</span>
                            @elseif ($vendor->status === 'inactive')
                                <span class="badge text-bg-danger px-3 py-2">{{$vendor->status}}</span>
                            @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection