<?php

use Inertia\Inertia;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserSettingController;


Route::middleware([
    'universal',
])->group(function () {
    Route::get('/ziggy', fn() => response()->json(new Ziggy));
});


Route::group([
    'as' => 'landing.',
    'controller' => LandingController::class
], function () {
    Route::get('/', 'index')->name('index');
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
        Route::put('password', 'updatePassword')->name('password');
    });
});
