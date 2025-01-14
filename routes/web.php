<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FruitsController;
use App\Http\Middleware\RememberTokenAuth;

Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Fruits
Route::Resource('fruits', FruitsController::class);
Route::post('/fruits/{fruit}/images', [FruitsController::class, 'uploadImage']);
Route::get('fruits-list', [FruitsController::class, 'listView'])->name('fruits.list');

Route::prefix('api')->middleware(RememberTokenAuth::class)->group(function () {
    Route::apiResource('fruits', FruitsController::class);
});


