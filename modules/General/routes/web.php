<?php

use Illuminate\Support\Facades\Route;
use Modules\General\app\Http\Controllers\GeneralController;
use Modules\General\app\Http\Controllers\UserSettingController;

//TODO: нужно добавить логику которая прокинет prefix учывая роль и принадлежность к типу учебного заведения
Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'controller' => GeneralController::class
], function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('schedule', 'schedule')->name('schedule');

    Route::group([
        'as' => 'settings.',
        'prefix' => 'settings',
        'controller' => UserSettingController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::put('profile', 'updateProfile')->name('profile');
        Route::put('notification', 'updateNotification')->name('notification');
        Route::put('email-password', 'updateEmailPassword')->name('email-password');
    });
});
