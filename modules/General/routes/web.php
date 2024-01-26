<?php

use App\Facades\Data;
use Illuminate\Support\Facades\Route;
use Modules\General\app\Http\Controllers\GeneralController;
use Modules\General\app\Http\Controllers\UserSettingController;
use Modules\General\app\Http\Controllers\CreationStepsController;

Route::group([
    'middleware' => 'student_instructor',
    'controller' => GeneralController::class,
    'as' => 'general.',
], function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('schedule', 'schedule')->name('schedule');
    Route::get('grades', 'grade')->name('grade');
    Route::get('payments', 'payments')->name('payment');

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


    // TODO:
    Route::get('academy/add/course', [CreationStepsController::class, 'create'])->name('academy.add-step');
    Route::get('school/add/class', [CreationStepsController::class, 'create'])->name('school.add-step');
});
