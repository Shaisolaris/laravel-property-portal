<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthStateMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($request->user()) {

        }

        return $next($request);
    }
}
