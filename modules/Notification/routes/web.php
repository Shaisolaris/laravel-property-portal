<?php

use Illuminate\Support\Facades\Route;

Route::prefix('notifications')->middleware(['auth', 'user.detail'])->controller(NotificationController::class)->group(function () {
    Route::get('', 'index')->name('notifications.index');
    Route::get('show/{notification:uuid}', 'show')->name('notifications.show');
});
