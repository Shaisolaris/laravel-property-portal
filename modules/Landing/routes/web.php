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
        Route::get('categories', 'category')->name('category');
        Route::get('help-support', 'helpSupport')->name('help-support');

        Route::group([
            'as' => 'course.',
            'prefix' => 'courses'
        ], function () {
            Route::get('', 'courses')->name('index');
            Route::get('{course}', 'courseDetails')->name('details');
        });
    });

    Route::group([
        'as' => 'school.',
        'prefix' => 'school',
        'controller' => LandingSchoolController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::get('short-casual-courses', 'shortCasualCourses')->name('short-casual-courses');

        Route::group([
            'as' => 'class.',
            'prefix' => 'classes'
        ], function () {
            Route::get('', 'classes')->name('index');
            Route::get('{class}', 'classDetails')->name('details');
        });
    });
});
