<?php

use Illuminate\Support\Facades\Route;
use Modules\Assignment\app\Http\Controllers\AssignmentController;

Route::group([
    'middleware' => 'student_instructor',
    'prefix' => 'assignments',
    'as' => 'assignment.',
], function () {
    Route::resource('assignment', AssignmentController::class)->names('assignment');
});
