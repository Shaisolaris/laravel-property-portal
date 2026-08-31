<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Http\Request;
use App\Services\HandleInertiaRequestService;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';


    public function __construct(protected HandleInertiaRequestService $service)
    {
    }


    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => $this->service->userResponse($request),
            'navigations' => $this->service->setNavigations(),
            'flash' => $this->service->setFlush($request),
            'ziggy' => fn () => [
                ...(new Ziggy())->toArray(),
                'location' => $request->url(),
            ],
        ];
    }
}
