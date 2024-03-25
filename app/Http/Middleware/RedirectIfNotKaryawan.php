<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotKaryawan
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('karyawan')->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
