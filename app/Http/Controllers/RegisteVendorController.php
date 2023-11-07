<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteVendorController extends Controller
{

    protected $redirect = RouteServiceProvider::Vendor;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('vendor.auth.register');
    }
    public function vendorCreation(Request $request)
    {
        $validation = $request->validate(['name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'vendor',
            'status' => 'inactive'
        ]);
        if ($user) {
            $notification = [
                'message' => "Your account has been created successfully",
                'alert-type' => 'success'
            ];
            return redirect()->route('login')->withSuccess('Created Successfully');
        }
        return redirect()->route('login')->withErrors($validation);
    }
}
