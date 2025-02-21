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
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\UserCrewController; // Se actualiza la importación (remover Front\)


// Página principal - Siempre muestra home.blade.php
Route::get('/', function () {
    return view('home.home'); 
})->name('home');

// Rutas para usuarios no autenticados
Route::middleware('guest')->group(function () {
    // Registro
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Inicio de sesión
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    // Solicitar enlace para restablecer contraseña
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    // Restablecer contraseña (formulario)
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    // Enviar nueva contraseña
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

// Rutas protegidas para usuarios autenticados
Route::middleware('auth')->group(function () {
    // Verificar email (notificación y enlace)
    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    // Confirmar contraseña
    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Cierre de sesión
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Redirigir según el rol
    Route::get('/dashboard', function () {
        $role = Auth::user()->role_id; // Asume que 'role_id' distingue administrador (1) y usuario normal
        if ($role == 1) {
            return redirect()->route('backOffice');
        } else {
            return redirect()->route('frontOffice');
        }
    })->name('dashboard');

    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Definir la ruta 'front'
Route::get('/front', [FrontController::class, 'index'])->name('front');

Route::get('/usuaris', function () {
    return view('back.users');
})->name('usuaris');

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::prefix('back')->group(function () {
    Route::resource('crews', CrewController::class);
    Route::resource('users', UserController::class);
    Route::resource('draws', DrawController::class);
});

Route::resource('pagos', PaymentController::class);

Route::get('/draws', [DrawController::class, 'index'])->name('draw.index');
Route::post('/draws/regenerate', [DrawController::class, 'draw'])->name('draw.regenerate');
Route::get('/draws/{year}', [DrawController::class, 'show'])->name('draw.show');

Route::get('/back/home', [BackController::class, 'index'])->name('backOffice');
Route::get('/front/home', [FrontController::class, 'index'])->name('frontOffice');
Route::get('/crews', [CrewController::class, 'showCrews'])->name('crews.show');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('crews/{crew}/request-membership', [UserCrewController::class, 'requestMembership'])->name('front.crews.requestMembership');

// Ruta para confirmar solicitudes de membresía en el back-office
Route::post('/back/memberships/{crew}/{user}/confirm', [MembershipController::class, 'confirm'])->name('back.memberships.confirm');