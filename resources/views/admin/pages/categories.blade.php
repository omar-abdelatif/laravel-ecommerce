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
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                        <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_categories" data-coreui-whatever="@mdo">
                            <b>Add Category</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    {{-- ! Add Category Modal ! --}}
    <div class="modal fade" id="add_categories" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-white">
                    <form action="{{route('admin.categories.store')}}" method="post">
                        @csrf
                        <div class="form-group text-center mb-3">
                            <label for="title">
                                <b>Title</b>
                            </label>
                            <input type="text" name="title" id="title" class="form-control text-center" placeholder="Category Name">
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <?php $i = 1 ?>
    <div class="table mt-3">
        <table class="table text-center align-middle table-striped table-hover" id="table"  data-order='[[ 0, "asc" ]]' data-page-length='10'>
            <thead>
                <tr>
                    <td class="text-center">#</td>
                    <td class="text-center">Title</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$category->title}}</td>
                        <td>
                            {{-- ! Edit ! --}}
                            <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_categories{{$category->id}}" data-coreui-whatever="@mdo">
                                <b>
                                    <i class="fa-solid fa-pen"></i>
                                </b>
                            </button>
                            <div class="modal fade" id="edit_categories{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Category {{$category->title}}</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark text-white">
                                            <form action="{{route('admin.categories.update')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$category->id}}">
                                                <div class="form-group text-center mb-3">
                                                    <label for="title" class="mb-2">
                                                        <b class="text-white">Title</b>
                                                    </label>
                                                    <input type="text" name="title" id="title" class="form-control text-center" value="{{$category->title}}">
                                                </div>
                                                <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ! Delete ! --}}
                            <a href="{{route('admin.categories.destroy', $category->id)}}" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection