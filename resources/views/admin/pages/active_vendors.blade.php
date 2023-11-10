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
                            <li class="breadcrumb-item active">Active Vendors</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('admin')
    <?php $i=1 ?>
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
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                            <img src="{{asset('assets/vendor/imgs/users/'.$item->img)}}" alt="{{$item->img}}" class="rounded-circle" width="50px" height="auto">
                        </td>
                        <td>
                            @if ($item->status === 'active')
                                <span class="badge text-bg-success px-3 py-2">{{$item->status}}</span>
                            @elseif ($item->status === 'inactive')
                                <span class="badge text-bg-danger px-3 py-2">{{$item->status}}</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_vendor{{$item->id}}" data-coreui-whatever="@mdo">
                                <b>
                                    <i class="fa-solid fa-pen"></i>
                                </b>
                            </button>
                            <div class="modal fade" id="edit_vendor{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Vendor {{$item->name}}</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark text-white">
                                            <form action="" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <div class="form-group text-center mb-3">
                                                    <label for="name" class="mb-2">
                                                        <b class="text-white">Title</b>
                                                    </label>
                                                    <input type="text" name="name" id="name" class="form-control text-center" value="{{$item->name}}">
                                                </div>
                                                <div class="form-group text-center mb-3">
                                                    <label for="address" class="mb-2">
                                                        <b class="text-white">Address</b>
                                                    </label>
                                                    <input type="text" name="address" id="address" class="form-control text-center" value="{{$item->address}}">
                                                </div>
                                                <div class="form-group text-center mb-3">
                                                    <label for="phone" class="mb-2">
                                                        <b class="text-white">Phone</b>
                                                    </label>
                                                    <input type="tel" name="phone" id="phone" class="form-control text-center" value="{{$item->phone}}">
                                                </div>
                                                <div class="view-img text-center">
                                                    <img src="{{$item->img ? asset("assets/vendor/imgs/users/".$item->img) : 'https://placehold.co/150'}}" width="100" class="rounded-circle" id="showImage" alt="{{$item->img}}">
                                                </div>
                                                <div class="form-group text-center mb-3">
                                                    <label for="image" class="mb-2">
                                                        <b class="text-white">Image</b>
                                                    </label>
                                                    <input type="file" name="img" id="image" class="form-control text-center" value="{{$item->phone}}">
                                                </div>
                                                <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin.vendor.details', $item->id)}}" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection