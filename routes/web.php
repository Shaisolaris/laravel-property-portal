<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\MediaController;
use Modules\Auth\app\Http\Controllers\AuthenticatedSessionController;

Route::group([
    'as' => 'upload.',
    'prefix' => 'upload',
    'controller' => MediaController::class
], function () {
    Route::post('profile-photo', 'uploadProfilePhoto')->name('profile-photo');
});

Route::group([
    'as' => 'ei-pay.',
    'prefix' => 'education-institution/{model:uuid}',
    'controller' => PayController::class
], function () {
    Route::get('pay', 'index')->name('index');
    Route::post('pay', 'pay')->name('pay');

    Route::get('success', 'success')->name('success');
    Route::get('fail', 'fail')->name('fail');
});

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
