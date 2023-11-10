@extends('vendor.layouts.master')
@section('vendor')
    @php
        $id= Auth::user()->id;
        $vendorId = App\Models\User::find($id);
        $status = $vendorId->status;
    @endphp
    <div class="col-12">
        <h1>
            Hello
            {{Auth::user()->name}}
            your Account is
            @if ($status === 'active')
                <span class="text-success">
                    <b>Active</b>
                </span>
            @else
                <span class="text-danger">
                    <b>InActive</b>
                </span>
            @endif
        </h1>
        <p class="mb-0 text-danger">
            <b>Please wait for admin approval</b>
        </p>
    </div>
@endsection