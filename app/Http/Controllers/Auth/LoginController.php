<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $url = '';
        if ($request->user()->role === 'admin') {
            $url = 'admin/dashboard';
        } elseif ($request->user()->role === 'vendor') {
            $url = 'vendor/dashboard';
        } else {
            $url = 'dashboard';
        }
        return redirect()->intended($url);
    }
}
