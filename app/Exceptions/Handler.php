<?php

namespace App\Exceptions;

use Inertia\Inertia;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $e): \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        $response = parent::render($request, $e);

        $errorTypes = \Illuminate\Support\Str::contains('https', protocol())
            ? [404, 403, 503, 500]
            : [404, 403, 503]
        ;

        if (in_array($response->status(), $errorTypes)) {
            return Inertia::render('Error', ['status' => $response->status()])
                ->toResponse($request)
                ->setStatusCode($response->status());
        } elseif ($response->status() === 419) {
            return back()->with([
                'message' => 'The page expired, please try again.',
            ]);
        }

        return $response;
    }
}
