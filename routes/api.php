<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;


Route::post('/login', [AuthController::class, 'login']);

Route::middleware(\App\Http\Middleware\CheckToken::class)->group(function () {
    Route::get('/suppliers', [SupplierController::class, 'index']);
    Route::get('/suppliers/{id}', [SupplierController::class, 'show']);
    Route::post('/orders', [OrderController::class, 'store']);
});


