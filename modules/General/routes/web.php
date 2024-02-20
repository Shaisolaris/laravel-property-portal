<?php

use Illuminate\Support\Facades\Route;
use Modules\General\app\Http\Controllers\GeneralController;
use Modules\General\app\Http\Controllers\UserSettingController;
use Modules\General\app\Http\Controllers\CreationStepsController;

Route::group([
    'middleware' => 'student_instructor_organizer',
    'controller' => GeneralController::class,
    'as' => 'general.',
], function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('schedule', 'schedule')->name('schedule');
    Route::get('grades', 'grade')->name('grade');

    Route::group([
        'as' => 'settings.',
        'prefix' => 'settings',
        'controller' => UserSettingController::class
    ], function () {
        Route::get('', 'index')->name('index');
        Route::put('profile', 'updateProfile')->name('profile');
        Route::put('notification', 'updateNotification')->name('notification');
        Route::put('email-password', 'updateEmailPassword')->name('email-password');
    });

    Route::get('add/{program}', [CreationStepsController::class, 'create'])->name('institution.add-step');
    Route::post('add/{program}', [CreationStepsController::class, 'store'])->name('institution.add-step.store');
    Route::post('validate/{program}', [CreationStepsController::class, 'validateData'])->name('institution.validate.step');
});
