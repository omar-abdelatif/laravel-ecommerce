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
        <div class="users-title text-center mt-5 mb-5 text-decoration-underline">
            <h2>All Users</h2>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Img</th>
                    <th scope="col">Status</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
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
                        <td>{{ $user->address }}</td>
                        <td>
                            <img src="{{$user->img}}" class="rounded-circle" width="50" alt="">
                        </td>
                        <td>{{ $user->status }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @if ($user->role == 'vendor')
                                <a href="" class="btn btn-warning">
                                    <b>Edit</b>
                                </a>
                                <a href="" class="btn btn-danger">
                                    <b>Delete</b>
                                </a>
                                <a href="" class="btn btn-success">
                                    <b>View</b>
                                </a>
                            @else
                                <a href="" class="btn btn-warning">
                                    <b>Edit</b>
                                </a>
                                <a href="" class="btn btn-danger">
                                    <b>Delete</b>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection