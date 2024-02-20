<?php

use Illuminate\Support\Facades\Route;
use Modules\Schedule\app\Http\Controllers\ScheduleController;

Route::group([
    'prefix' => 'schedule/{eiClass:uuid}',
    'as' => 'schedule.',
    'controller' => ScheduleController::class
], function () {
    Route::post('store', 'store')->name('store');

    Route::group([
        'prefix' => '{schedule:uuid}'
    ], function () {
        Route::put('update', 'update')->name('update');
        Route::delete('delete', 'destroy')->name('delete');
    });
});
