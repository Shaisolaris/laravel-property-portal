<?php

use Illuminate\Support\Facades\Route;
use Modules\School\app\Http\Controllers\MyClassesController;


Route::group([
    'middleware' => 'student_instructor',
    'prefix' => 'school',
    'as' => 'school.',
    'controller' => MyClassesController::class
], function () {
    Route::get('my-classes', 'index')->name('my-classes');
});
