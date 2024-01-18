<?php

use Inertia\Inertia;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserSettingController;
use Modules\Auth\app\Http\Controllers\LogoutController;
use Modules\Auth\app\Http\Controllers\AuthenticatedSessionController;


Route::middleware([
    'universal',
])->group(function () {
    Route::get('/ziggy', fn() => response()->json(new Ziggy));
});


Route::group([
    'middleware' => ['auth:sanctum', 'verified']
], function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Welcome');
    })->name('dashboard');

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

Route::group([
    'as' => 'upload.',
    'prefix' => 'upload',
    'controller' => \App\Http\Controllers\MediaController::class
], function () {
    Route::post('profile-photo', 'uploadProfilePhoto')->name('profile-photo');
});

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');