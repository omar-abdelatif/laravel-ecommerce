<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::Home;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request)
    {
        $url = '';
        if ($request->user()->role === 'admin') {
            $url = 'admin/dashboard';
        } elseif ($request->user()->role === 'vendor') {
            $url = 'vendor/dashboard';
        } else {
            $url = 'dashboard';
        }
        $notification = [
            'message' => "Loggedin Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->intended($url)->with($notification);
    }
}
