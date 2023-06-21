<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Controllers\ExampleController;

Route::group(['middleware' => ['api']], function () {
    Route::get('Dashboard/example', [ExampleController::class, 'index']);
});