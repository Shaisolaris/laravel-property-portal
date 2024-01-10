<?php

use Illuminate\Support\Facades\Route;
use Modules\Academy\app\Http\Controllers\AcademyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('academy', AcademyController::class)->names('academy');
});
