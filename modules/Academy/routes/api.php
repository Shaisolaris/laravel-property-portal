<?php

use Illuminate\Support\Facades\Route;
use Modules\Academy\app\Http\Controllers\Api\MyCoursesControllerControllerApi;

Route::middleware(['auth:sanctum'])->prefix('academy')->controller(MyCoursesControllerControllerApi::class)->group(function () {
    Route::get('filter', 'filter')->name('api.academy.filter');
});
