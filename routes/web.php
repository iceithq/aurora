<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', function () {
    return 'Login';
})->name('login');
Route::get('/test/hello', [TestController::class, 'hello']);
Route::resource('items', ItemsController::class);
Route::resource('patients', PatientsController::class);
