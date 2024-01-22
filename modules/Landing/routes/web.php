<?php

use Illuminate\Support\Facades\Route;
use Modules\Landing\app\Http\Controllers\LandingSchoolController;
use Modules\Landing\app\Http\Controllers\LandingAcademyController;

Route::group([
    'as' => 'landing.',
], function () {
    Route::group([
        'as' => 'academy.',
        'controller' => LandingAcademyController::class
    ], function () {
        Route::get('', 'index')->name('index');
        Route::get('all-courses', 'courses')->name('courses');
    });

    Route::group([
        'as' => 'school.',
        'prefix' => 'school',
        'controller' => LandingSchoolController::class
    ], function () {
        Route::get('school', 'index')->name('index');
    });
});
