<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PatientsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/hello', [TestController::class, 'hello']);
Route::resource('items', ItemsController::class);

Route::resource('patients', PatientsController::class);
