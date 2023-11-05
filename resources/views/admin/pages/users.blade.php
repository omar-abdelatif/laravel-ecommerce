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
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection
@section('admin')
    <div class="col-12">
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
        <div class="users-title text-center mt-3 mb-5 text-decoration-underline">
            <h2>All Users</h2>
        </div>
        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Img</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <img src="{{(!empty($user->img)) ? asset('assets/admin/imgs/users/'.$user->img) : $user->img}}" class="rounded-circle" width="50" alt="">
                        </td>
                        <td>{{ $user->status }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @if ($user->role == 'vendor')
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down text-dark fa-xl"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('admin.delete',$user->id)}}" class="btn bg-danger dropdown-item mb-2 text-center">
                                        <b>Delete</b>
                                    </a>
                                    <a href="" class="btn bg-warning dropdown-item text-center">
                                        <b>Edit</b>
                                    </a>
                                    <a href="" class="btn bg-success dropdown-item text-center">
                                        <b>View</b>
                                    </a>
                                </div>
                            @else
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down text-dark fa-xl"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('admin.delete',$user->id)}}" class="btn bg-danger dropdown-item mb-2 text-center">
                                        <b>Delete</b>
                                    </a>
                                    <a href="" class="btn bg-warning dropdown-item text-center">
                                        <b>Edit</b>
                                    </a>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection