<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users',[\App\Http\Controllers\UserController::class,'index']);
Route::put('users-add',[UserController::class,'store']);
Route::post('login',[\App\Http\Controllers\Login::class,'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
