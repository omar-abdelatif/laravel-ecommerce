<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $vendors = User::where(['role' => 'vendor'])->get();
        return view('admin.dashboard', compact('vendors'));
    }
}
