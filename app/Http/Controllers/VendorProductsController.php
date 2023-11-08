<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorProductsController extends Controller
{
    public function index()
    {
        return view('vendor.pages.products');
    }
}
