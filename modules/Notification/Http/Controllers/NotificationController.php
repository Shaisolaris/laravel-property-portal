<?php

namespace Modules\Notification\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Notification\Entities\Notification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Modules\Notification\Http\Resources\NotificationResource;

class NotificationController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->authorizeResource(Notification::class, 'notification');
    }

    public function index(Request $request)
    {
        return inertia('Notification::Index', [
            'notifications' => NotificationResource::collection($request->user()->notifications()->get()),
            'previous_url' => url()->previous()
        ]);
    }

    public function show(Notification $notification)
    {
        if (!$notification->is_seen) {
            $notification->update(['is_seen' => true]);
        }

        return redirect(\Modules\Notification\Facades\Notification::routeBinding($notification));
    }

    public function notifications(Request $request)
    {
        return response()->json(NotificationResource::collection($request->user()->unreadNotifications()->get()));
    }

    public function markSeen(Notification $notification)
    {
        return response()->json($notification->update(['is_seen' => true]));
    }

    public function markSeenAll(Request $request)
    {
        return response()->json($request->user()->unreadNotifications()->update(['is_seen' => true]));
    }
}
