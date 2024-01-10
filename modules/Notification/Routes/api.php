<?php

use Modules\Notification\Http\Controllers\NotificationController;

Route::middleware('api')->controller(NotificationController::class)->group(function () {
    Route::get('notifications', 'notifications')->name('api.notifications');
    Route::put('notifications/mark-seen-all', 'markSeenAll')->name('api.notifications.mark-seen-all');
    Route::put('notifications/{notification:uuid}', 'markSeen')->name('api.notifications.mark-seen');
});
