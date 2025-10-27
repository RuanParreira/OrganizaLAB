<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Services\FinishedController;
use App\Http\Controllers\Services\InProgressController;
use App\Http\Controllers\Services\NotStartedController;
use App\Http\Controllers\Services\ReadyController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rota de Inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota de Registro
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store')->name('auth.register');
});

// Rota de Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('auth.login');
});
Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');

// Rotas Protegidas
Route::middleware('auth')->group(function () {
    // Rota da dashboard
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Rota de perfil do usuario
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::get('/profile/edit', 'edit')->name('profile.edit');
        Route::put('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // Rotas de clientes
    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index')->name('clients');
        Route::post('/clients', 'store')->name('clients.store');
        Route::delete('/clients/{client}', 'destroy')->name('clients.destroy');
        Route::put('/clients/{client}', 'update')->name('clients.update');
    });

    // Rotas de serviços (criação)
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services/create', 'index')->name('services.create');
        Route::post('/services/create', 'store')->name('services.store');
    });

    // Nao Iniciado
    Route::controller(NotStartedController::class)->group(function () {
        Route::get('/services/not-started', 'index')->name('services.notstarted');
        Route::put('/services/{service}/start', 'updateStatus')->name('services.start');
    });

    // Em Andamento
    Route::controller(InProgressController::class)->group(function () {
        Route::get('/services/in-progress', 'index')->name('services.inprogress');
        Route::put('/services/{service}/complete', 'updateStatus')->name('services.complete');
    });

    // Concluidos
    Route::controller(readyController::class)->group(function () {
        Route::get('/services/ready', 'index')->name('services.ready');
        Route::put('/services/{service}/finalize', 'updateStatus')->name('services.finalize');
    });

    // Finalizados
    Route::controller(finishedController::class)->group(function () {
        Route::get('/services/finished', 'index')->name('services.finished');
    });
});
