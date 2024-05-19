<?php

use App\Http\Controllers\WaterMeterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('watermeters', WaterMeterController::class);
