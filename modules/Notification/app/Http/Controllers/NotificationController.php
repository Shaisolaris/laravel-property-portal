<?php

namespace Modules\Notification\app\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Notification\Entities\Notification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Modules\Notification\app\Http\Resources\NotificationResource;

class NotificationController extends Controller
{
    use AuthorizesRequests;


    public function __construct()
    {
        parent::__construct();
        //        $this->authorizeResource(Notification::class, 'notification');
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
        if (!$notification->read_at) {
            $notification->update(['read_at' => Carbon::now()]);
        }

        return redirect(\Modules\Notification\Facades\Notification::routeBinding($notification));
    }


    public function notifications(Request $request)
    {
        return response()->json(NotificationResource::collection($request->user()->unreadNotifications()->get()));
    }


    public function markSeen(Notification $notification)
    {
        return response()->json($notification->update(['read_at' => Carbon::now()]));
    }


    public function markSeenAll(Request $request)
    {
        return response()->json($request->user()->unreadNotifications()->update(['read_at' => Carbon::now()]));
    }
}
