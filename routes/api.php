<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\AuthController;



Route::prefix('/v1')->group(function () {


    Route::prefix('/auth')->name('auth.')->group(function () {
        Route::get('/frst', [AuthController::class, 'frst'])->name('frst');
        Route::get('/csrf', [AuthController::class, 'csrf'])->name('csrf');
        Route::get('/user', [AuthController::class, 'user'])->name('user');
    });


});
