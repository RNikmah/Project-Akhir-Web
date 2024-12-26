<?php

use Illuminate\Auth\Middleware\Authenticate; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/destination', App\Http\Controllers\Api\DestinationController::class); 
Route::apiResource('/cart', App\Http\Controllers\Api\CartController::class); 
Route::apiResource('/payment', App\Http\Controllers\Api\PaymentController::class); 
Route::apiResource('/invoice', App\Http\Controllers\Api\InvoiceController::class); 