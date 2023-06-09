<?php

use App\Http\Controllers\ComponenteController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

/* ----- RUTA WELCOME ----- */
Route::get('/', function () {
    return view('welcome');
});

/* ----- RUTA COMPONENTES ----- */
Route::resource('/componentes', ComponenteController::class);

/* ----- RUTA DASHBOARD CON AUTENTICACIÓN ----- */
Route::get('/dashboard', function () {
    $user = \Auth::user();
    return view('dashboard', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

/* ----- RUTA RIDER'S HUB ----- */
Route::get('/nosotros', function () {
    $user = \Auth::user();
    return view('Nosotros', ['user' => $user]);
})->name('Nosotros');

/* ----- RUTA SOPORTE TÉCNICO ----- */
Route::get('/Soporte', function () {
    $user = \Auth::user();
    return view('Soporte', ['user' => $user]);
})->name('Soporte');

/* ----- RUTA FORMULARIO DE SOPORTE TÉCNICO ----- */
Route::get('/formulario', [SoporteController::class, 'index']);
Route::post('/formulario', [SoporteController::class, 'store']);

/* ----- RUTA EDITAR PERFIL ----- */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* ----- RUTA PARA DESLOGEARSE ----- */
Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
})->name('logout');

// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';

