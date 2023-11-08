<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard(){
        return view('vendor.dashboard');
    }
    public function listIndex()
    {
        return view('admin.pages.vendors');
    }
    public function storeVendor(Request $request){}
}
