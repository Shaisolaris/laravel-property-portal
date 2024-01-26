<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\app\Http\Controllers\AuthenticatedSessionController;

Route::group([
    'as' => 'upload.',
    'prefix' => 'upload',
    'controller' => \App\Http\Controllers\MediaController::class
], function () {
    Route::post('profile-photo', 'uploadProfilePhoto')->name('profile-photo');
});

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
