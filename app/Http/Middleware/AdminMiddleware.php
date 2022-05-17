<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role) {
            return $next($request);
        }
        Notify::error("You dont have permission to access this page. Please login to verify", 'Error');
        return redirect('/login');
    }
}
