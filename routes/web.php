<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\ProvedoresController;
use App\Http\Controllers\Web\TokensController;



Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'admin']);


    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard']);
    });


    Route::prefix('/provedores')->name('provedores.')->group(function () {
        Route::get('/', [AdminController::class, 'provedores']);

        Route::get('/listar', [ProvedoresController::class, 'listar']);
        Route::get('/buscar/{slug}/{id}', [ProvedoresController::class, 'buscar']);
    });


    Route::prefix('/tokens')->name('tokens.')->group(function () {
        Route::get('/', [AdminController::class, 'tokens']);

        Route::get('/listar', [TokensController::class, 'listar']);
        Route::get('/buscar/{slug}/{id}', [TokensController::class, 'buscar']);
    });


});
