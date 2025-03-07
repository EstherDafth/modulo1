<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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


// Rutas para la gestión de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{correo}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::put('/usuarios/{correo}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{correo}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

