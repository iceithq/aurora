<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ItemsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/hello', [TestController::class, 'hello']);
Route::resource('items', ItemsController::class);
