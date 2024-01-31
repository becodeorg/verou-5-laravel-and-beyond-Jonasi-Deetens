<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/login', [UserController::class, 'showLogin'])->name("login");
Route::post('/login', [UserController::class, 'login'])->name("login");
Route::get('/logout', [UserController::class, 'logout'])->name("logout");
Route::post('/users', [UserController::class, 'store'])->name("register");

Route::resource('/jobs', JobController::class);