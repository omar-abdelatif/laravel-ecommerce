<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user() && $request->user()->role !== $role) {
            if ($request->user()->role === 'vendor') {
                return redirect()->route('vendor.dashboard');
            } elseif ($request->user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }
        return $next($request);
    }

    // public function handle($request, Closure $next, $role)
    // {
    //     if (!$request->user() || !$request->user()->hasRole($role)) {
    //         return redirect('/dashboard'); // Redirect unauthorized users to the default dashboard route
    //     }
    //     return $next($request);
    // }
}
