<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PayMiddleware
{
    protected array $routeMappings = [];


    public function __construct()
    {
        $this->routeMappings = [
            'ei-pay.index' => 'ei-pay.index',
            'ei-pay.pay' => 'ei-pay.pay',
            'ei-pay.success' => 'ei-pay.success',
            'ei-pay.fail' => 'ei-pay.fail'
        ];
    }

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        $routeName = $request->route()->getName();

        if ($user && $user->isNeedPay() && !Arr::exists($this->routeMappings, $routeName) && !Str::contains($routeName, 'landing.')) {
            return redirect()->to($user->myClass->pay());
        }

        return $next($request);
    }
}
