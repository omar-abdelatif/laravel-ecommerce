<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.master');
    }
    public function userRegister()
    {
        return view('frontend/pages/auth/user/register');
    }
    public function becomeVendor()
    {
        return view('frontend.pages.auth.vendor.register');
    }
    // public function login(Request $request)
    // {
    // }
    public function login()
    {
        return view('frontend.pages.auth.user.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
