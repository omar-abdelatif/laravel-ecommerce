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
    <div class="info-box mt-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary-gradient">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">
                                26K
                                <span class="fs-6 fw-normal">
                                    (
                                        -12.4%
                                        <svg class="icon">
                                            <use xlink:href="{{asset('icons/coreui.svg#cil-arrow-bottom')}}"></use>
                                        </svg>
                                    )
                                </span>
                            </div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="{{asset('icons/coreui.svg#cil-options')}}"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4 text-white bg-info-gradient">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">
                                26k
                                <span class="fs-6 fw-normal">
                                    (
                                        -12.4%
                                        <svg class="icon">
                                            <use xlink:href="{{asset('icons/coreui.svg#cil-arrow-bottom')}}"></use>
                                        </svg>
                                    )
                                </span>
                            </div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="{{asset('icons/coreui.svg#cil-options')}}"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning-gradient">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">
                                26k
                                <span class="fs-6 fw-normal">
                                    (
                                        -12.4%
                                        <svg class="icon">
                                            <use xlink:href="{{asset('icons/coreui.svg#cil-arrow-bottom')}}"></use>
                                        </svg>
                                    )
                                </span>
                            </div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="{{asset('icons/coreui.svg#cil-options')}}"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4 text-white bg-danger-gradient">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">
                                26k
                                <span class="fs-6 fw-normal">
                                    (
                                        -12.4%
                                        <svg class="icon">
                                            <use xlink:href="{{asset('icons/coreui.svg#cil-arrow-bottom')}}"></use>
                                        </svg>
                                    )
                                </span>
                            </div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="{{asset('icons/coreui.svg#cil-options')}}"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Users Table ! --}}
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-left text-decoration-underline">
                <b>Users Table</b>
            </h3>
        </div>
        <div class="card-body"></div>
    </div>
    {{-- ! Vendors Table ! --}}
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-left text-decoration-underline">
                <b>Vendors Table</b>
            </h3>
        </div>
        <div class="card-body"></div>
    </div>
    {{-- ! Products Table ! --}}
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-left text-decoration-underline">
                <b>Products Table</b>
            </h3>
        </div>
        <div class="card-body"></div>
    </div>
    {{-- ! Invoices Table ! --}}
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-left text-decoration-underline">
                <b>Invoices Table</b>
            </h3>
        </div>
        <div class="card-body"></div>
    </div>
    {{-- ! Orders Table ! --}}
    <div class="card">
        <div class="card-header">
            <h3 class="text-left text-decoration-underline">
                <b>Orders Table</b>
            </h3>
        </div>
        <div class="card-body">
            <table class="table borderd-table display align-middle text-center text-white" id="table" data-order='[[ 0, "asc" ]]' data-page-length='10'>
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Order No.</th>
                        <th class="text-center">Order Name</th>
                        <th class="text-center">Order Date</th>
                        <th class="text-center">Vendor Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection