<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class);

// Dumpable trait testing
Route::get('/test-dumpable', [TestController::class, 'testDumpable']);

// Eager Loading testing for users
Route::get('/users', [UserController::class, 'index']);


