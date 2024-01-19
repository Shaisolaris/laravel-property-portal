<?php

use Illuminate\Support\Facades\Route;
use Modules\Landing\app\Http\Controllers\LandingController;

Route::group([
    'as' => 'landing.',
    'controller' => LandingController::class
], function () {
    Route::get('/', 'indexAcademy')->name('academy');
    Route::get('school', 'indexSchool')->name('school');
    Route::get('all-courses', 'courses')->name('all-courses');
});
