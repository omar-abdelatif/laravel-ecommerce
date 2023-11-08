@extends('vendor.layouts.master')
@section('header')
    <div class="header-divider"></div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 w-100">
                    <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('vendor.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_products" data-coreui-whatever="@mdo">
                            <b>Add Products</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    {{-- ! Add Category Modal ! --}}
    <div class="modal fade" id="add_products" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@section('vendor')
    <?php $i = 1 ?>
    <div class="table mt-3">
        <table class="table text-center align-middle table-striped table-hover" id="table"  data-order='[[ 0, "asc" ]]' data-page-length='10'>
            <thead>
                <tr>
                    <td class="text-center">#</td>
                    <td class="text-center">Title</td>
                    <td class="text-center">Description</td>
                    <td class="text-center">Image</td>
                    <td class="text-center">Price</td>
                    <td class="text-center">Quantity</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
@endsection