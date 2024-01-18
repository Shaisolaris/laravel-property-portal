<?php

use Illuminate\Support\Facades\Route;
use Modules\Landing\app\Http\Controllers\LandingController;

Route::group([
    'as' => 'landing.',
    'controller' => LandingController::class
], function () {
    Route::get('/', 'index')->name('index');
});
