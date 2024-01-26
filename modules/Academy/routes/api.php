<?php

use Illuminate\Support\Facades\Route;
use Modules\Academy\app\Http\Controllers\Api\MyCoursesControllerApi;

Route::middleware(['auth:sanctum'])->prefix('academy')->controller(MyCoursesControllerApi::class)->group(function () {
    Route::get('filter', 'filter')->name('api.academy.filter');
});
