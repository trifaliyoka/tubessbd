<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('home');
Route::get('/dokter', [App\Http\Controllers\GuestController::class, 'dokter']);
Route::get('/products', [App\Http\Controllers\GuestController::class, 'products']);
Route::get('/login', [App\Http\Controllers\GuestController::class, 'login']) ->name('login');
Route::get('/register', [App\Http\Controllers\GuestController::class, 'register']) ->name('register');
Route::get('/tanya', [App\Http\Controllers\GuestController::class, 'tanya']);
Route::get('/auth/error', [App\Http\Controllers\GuestController::class, 'error']) ->name('error ');

// user
Route::get('/user/home', [App\Http\Controllers\UserController::class, 'home']);//->middleware('role:user');







