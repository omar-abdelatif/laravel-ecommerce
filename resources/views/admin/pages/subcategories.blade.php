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
                            <li class="breadcrumb-item active">SubCategories</li>
                        </ol>
                        <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_subcategories" data-coreui-whatever="@mdo">
                            <b>Add SubCategories</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    {{-- ! Add Category Modal ! --}}
    <div class="modal fade" id="add_subcategories" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-white">
                    <form action="{{ route('admin.subCategories.store') }}" method="post">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="region" class="text-white">
                                <b>Category Name</b>
                            </label>
                            <select name="category_name" id="region" class="form-control text-center">
                                <option value="0" selected>-- Choose Category --</option>
                                @foreach ($allcategories as $cat)
                                    <option value="{{ $cat->title }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3 mb-2">
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
                    <th class="text-center">Title</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcats as $sub)
                    <tr>
                        <td class="text-center">{{$i++}}</td>
                        <td class="text-center">{{$sub->title}}</td>
                        <td class="text-center">{{$sub->category_name}}</td>
                        <td class="text-center">
                            {{-- ! Edit ! --}}
                            <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_categories{{$sub->id}}" data-coreui-whatever="@mdo">
                                <b>
                                    <i class="fa-solid fa-pen"></i>
                                </b>
                            </button>
                            <div class="modal fade" id="edit_categories{{$sub->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Category {{$sub->title}}</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark text-white">
                                            <form action="{{route('admin.subCategories.update')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$sub->id}}">
                                                <div class="form-group mt-3">
                                                    <label for="region" class="text-white">
                                                        <b>Category Name</b>
                                                    </label>
                                                    <select name="category_name" id="region" class="form-control text-center">
                                                        <option value="0" selected>-- Choose Category --</option>
                                                        @foreach ($allcategories as $cat)
                                                            <option value="{{$cat->title}}" {{$cat->title == $sub->category_name ? 'selected' : ''}}>{{$cat->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group text-center mb-3">
                                                    <label for="title" class="mb-2">
                                                        <b class="text-white">Title</b>
                                                    </label>
                                                    <input type="text" name="title" id="title" class="form-control text-center" value="{{$sub->title}}">
                                                </div>
                                                <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ! Delete ! --}}
                            <a href="{{route('admin.subCategories.destroy', $sub->id)}}" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            {{--  --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
