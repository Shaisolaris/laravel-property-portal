<?php

use Illuminate\Support\Facades\Route;
use Modules\PaymentOperations\app\Http\Controllers\PaymentOperationsController;

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
    Route::resource('paymentoperations', PaymentOperationsController::class)->names('paymentoperations');
});
