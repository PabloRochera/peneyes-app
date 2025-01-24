<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\CheckRole;

// Ruta principal (Home)
Route::get('/', function () {
    return view('home.home'); // Vista: resources/views/home/home.blade.php
})->name('home');

// Rutas de autenticación
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register'); // Vista: resources/views/auth/register.blade.php
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login'); // Vista: resources/views/auth/login.blade.php
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Autenticación de roles y redirección basada en roles
Route::get('/log', function () {
    if (Auth::check()) {
        $role = Auth::user()->role_id;
        return $role == 1
            ? redirect()->route('back.backHome') 
            : redirect()->route('front.frontHome'); 
    }
    return redirect()->route('login');
})->name('log');

// Rutas protegidas para el perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Vista: resources/views/profile/edit.blade.php
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Back Office (role_id = 1)
Route::middleware(['auth', CheckRole::class . ':1'])->prefix('back')->group(function () {
    Route::get('/', [BackController::class, 'index'])->name('back.backHome'); // Vista: resources/views/back/backHome.blade.php
});

// Front Office (role_id = 2)
Route::middleware(['auth', CheckRole::class . ':2'])->prefix('front')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('front.frontHome'); // Vista: resources/views/front/frontHome.blade.php
});