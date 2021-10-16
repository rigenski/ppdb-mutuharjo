<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        if (auth()->user()->role == "admin") {
            return redirect('/admin');
        } else if (auth()->user()->role == "siswa") {
            return redirect('/siswa');
        }

        return redirect('/');
    }
}
