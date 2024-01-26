<?php

use Illuminate\Support\Facades\Route;
use Modules\General\app\Http\Controllers\CreationStepsController;
use Modules\General\app\Http\Controllers\GeneralController;
use Modules\General\app\Http\Controllers\UserSettingController;

//TODO: нужно добавить логику которая прокинет prefix учывая роль и принадлежность к типу учебного заведения

//У юзера есть уже параметр institution_type institution_name
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


    // TODO:
    Route::get('academy/add/course', [CreationStepsController::class,'create'])->name('academy.add-step');
    Route::get('school/add/class', [CreationStepsController::class,'create'])->name('school.add-step');
});
