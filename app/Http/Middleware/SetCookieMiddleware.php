<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetCookieMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = 'en';

        if (!Cookie::has('lang')) {
            Cookie::forever('lang', $lang);
        }

        App::setLocale($lang);

        return $next($request);
    }
}
