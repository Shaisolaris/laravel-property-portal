<?php

namespace Modules\Auth\app\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class VerifyUserData
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response|RedirectResponse|JsonResponse|BinaryFileResponse|StreamedResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse|JsonResponse|BinaryFileResponse|StreamedResponse
    {
        // TODO:: нужно настроить перенаправления если какие то данные не были установлены - какие имеменно, в роутах посредник user.data
        return $next($request);
    }
}
