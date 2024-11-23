<?php

use App\Http\Controllers\productController;

use Illuminate\Support\Facades\Route;

Route::get("/", [productController::class, 'index']);
Route::get("products/create", [productController::class, 'create']);
Route::post("products/store", [productController::class, 'store']);
Route::get("products/{id}/show", [productController::class, 'show']);
Route::get("products/{id}/edit", [productController::class, 'edit']);
Route::put("products/{id}/update", [productController::class, 'update']);

Route::get("products/{id}/delete", [productController::class, 'delete']);
