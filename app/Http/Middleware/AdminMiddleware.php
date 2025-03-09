<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login dan memiliki username 'admin_grahasamawa'
        if (Auth::check() && Auth::user()->username === 'admin_grahasamawa') {
            return $next($request); // Izinkan akses
        }

        // Redirect ke halaman login jika bukan admin
        return redirect('/admin')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
