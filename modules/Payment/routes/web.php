<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\app\Http\Controllers\PaymentController;
use Modules\Payment\app\Http\Controllers\PaymentCredentialController;
use Modules\Payment\app\Http\Controllers\WithdrawalRequestController;

Route::group([
    'prefix' => 'payments',
    'as' => 'payment.',
    'controller' => PaymentController::class,
], function () {
    Route::group([
        'prefix' => 'payment-credentials',
        'as' => 'payment-credential.',
        'controller' => PaymentCredentialController::class,
    ], function () {
        Route::get('', 'index')->name('index');
        Route::post('update-create', 'updateCreate')->name('update-create');

        Route::group([
            'prefix' => '{paymentCredential:uuid}'
        ], function () {
            Route::delete('delete', 'destroy')->name('delete');
        });
    });

    Route::get('history', 'history')->name('history');

    Route::group([
        'prefix' => 'withdrawal-requests',
        'as' => 'withdrawal-request.',
        'controller' => WithdrawalRequestController::class
    ], function () {
        Route::get('', 'index')->name('index');
        Route::post('create', 'create')->name('create');

        Route::group([
            'prefix' => '{paymentCredential:uuid}',
            'middleware' => 'instructor'
        ], function () {
            Route::delete('update', 'update')->name('update');
        });
    });
});
