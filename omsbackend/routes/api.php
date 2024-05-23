<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::post('/orders/cancel-edit', [OrderController::class, 'cancelEdit']);

Route::get('/users', [RegisteredUserController::class, 'index']);