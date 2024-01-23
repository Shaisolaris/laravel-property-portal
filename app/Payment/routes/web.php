<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'paypal.',
    'prefix' => 'paypal'
], function () {
    Route::post('hyperwallet/webhook', function () {
        \Log::debug("paypal/hyperwallet/webhook");
    });

    Route::post('webhook', function () {
        \Log::debug("paypal/webhook");
    });
});