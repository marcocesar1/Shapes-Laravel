<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */


Route::get('/shapes', [\App\Http\Controllers\ShapesController::class, 'create'])
    ->name('shapes.create');