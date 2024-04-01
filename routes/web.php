<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
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
Route::middleware('auth.custom')->group(function () {
    // Routes that require authentication
    Route::get('/creator', [CreatorController::class, 'index'])->name('creator');
    Route::post('/creator/create', [CreatorController::class, 'store'])->name('creator.create');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::delete('/profile/{id}', [CartController::class, 'destroy'])->name('delete-order');
    Route::get('/cart', [CartController::class, 'show'])->name('cart');
});

// Login, Register, Logout Routes
Route::get('/', [MenuController::class, 'index'])->name('menu');
Route::get('/login', function(){
    return view('auth.login');
})->name('login');
Route::get('/register', function(){
    return view('auth.register');
})->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register/profile', [AuthController::class, 'register'])->name('register.profile');
Route::post('/login', [AuthController::class, 'login'])->name('login.profile');
