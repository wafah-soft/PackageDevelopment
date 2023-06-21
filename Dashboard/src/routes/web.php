<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Controllers\ExampleController;

Route::group(['middleware' => 'web'], function () {
    Route::get('Dashboard', [ExampleController::class, 'index']);
});