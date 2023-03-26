<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clients', [\App\Http\Controllers\MainController::class, 'clients'])->name('clients');
Route::get('/orders', [\App\Http\Controllers\MainController::class, 'orders'])->name('orders');
Route::get('/cars', [\App\Http\Controllers\MainController::class, 'cars'])->name('cars');
Route::get('/employers', [\App\Http\Controllers\MainController::class, 'employers'])->name('employers');
