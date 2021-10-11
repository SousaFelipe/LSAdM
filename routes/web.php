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



Route::prefix('/admin')->name('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('.page');


    Route::prefix('/dashboard')->name('.dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('.page');
    });


    Route::prefix('/provedores')->name('.provedores')->group(function () {
        Route::get('/', [AdminController::class, 'provedores'])->name('.page');
        Route::get('/listar', [ProvedoresController::class, 'listar'])->name('.listar');
        Route::get('/buscar/{slug}/{id}', [ProvedoresController::class, 'buscar'])->name('.buscar');
    });


    Route::prefix('/tokens')->name('.tokens')->group(function () {
        Route::get('/', [AdminController::class, 'tokens'])->name('.page');
        Route::get('/listar', [TokensController::class, 'listar'])->name('.listar');
        Route::get('/buscar/{slug}/{id}', [TokensController::class, 'buscar'])->name('.buscar');
    });


});
