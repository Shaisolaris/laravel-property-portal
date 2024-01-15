<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    const PER_PAGE = 10;


    protected mixed $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = auth()->user();

            if ($user) {
                $this->user = $user;
            }

            return $next($request);
        });
    }
}
