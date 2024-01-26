<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\app\Http\Controllers\PaymentController;

Route::group([
    'middleware' => 'student_instructor',
    'prefix' => 'payment/{model}',
    'as' => 'payment.',
    'controller' => PaymentController::class,
], function () {
    Route::get('success', 'success')->name('success');
    Route::get('fail', 'fail')->name('fail');
});
