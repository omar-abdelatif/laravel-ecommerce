<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisteVendorController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::Vendor;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function index()
    {
        return view('vendor.auth.register');
    }

    protected function vendorValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'unique:users'],
            'address' => ['required'],
            'img' => ['image', 'max:2048', 'mime:jpg,png,jpeg,webp'],
        ]);
    }
    protected function vendorCreation(Request $data)
    {
        $this->validate($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'unique:users'],
            'address' => ['required'],
            'img' => ['image', 'max:2048', 'mime:jpg,png,jpeg,webp'],
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'img' => 'default.png',
            'role' => 'vendor',
            // 'status' => 'deactivated'
        ]);
    }
}
