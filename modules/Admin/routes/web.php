<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\app\Http\Controllers\AdminController;


Route::group([
    'middleware' => ['auth:sanctum', 'role:admin'],
    'controller' => AdminController::class,
    'prefix' => 'oS6sMqBWEOTLi7pxtKqPXSWhbrD7',
    'as' => 'admin.',
], function () {
    Route::get('/', 'index')->name('dashboard');
});
