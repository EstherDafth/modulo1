
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;

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
Route::get('/', function () { //Esta es una funcion anonima o bien un call back
   return view('welcome');
});

Route::prefix('/autenticacion')->group(function(){
    //Rutas para el login
    Route::get('/', [AuthController ::class, 'showautenticacionForm'])->name('autenticacion');
    Route::post('/post', [AuthController ::class, 'autenticacion'])->name('autenticacion.post');
    Route::get('/logout', [AuthController ::class, 'logout'])->name('logout');
});

Route::prefix("profile")->group(function() {
    Route::get('/', [ProfileController::class, 'showProfileForm'])->name('profile.show');
    Route::get('/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/{id}', [ProfileController::class, 'update'])->name('profile.update');
});


Route::prefix('/password')->group(function(){//Rutas para la recuperacion de contraseñas
    //Rutas para la recuperacion de contraseñas
    /*paso1*/Route::get('/reset', [ResetPasswordController ::class, 'showResetForm'])->name('password.request');
    /*paso2*/Route::post('/post', [ResetPasswordController ::class, 'ReviewMailAndCreateToken'])->name('mail.token');
    /*paso3*/Route::get('/reset/{token}', [ResetPasswordController ::class, 'showResetFormWithToken'])->name('password.reset');
    /*paso4*/Route::post('/reset', [ResetPasswordController ::class, 'resetPassword'])->name('password.update');
    //Route::post('/email', [ResetPasswordController ::class, 'sendResetLinkEmail'])->name('password.email');

});

Route::prefix('register')->group(function() {
    Route::get('/', [RegisterController::class, 'create'])->name('register.create');
    Route::post('/', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/{user}', [RegisterController::class, 'register'])->name('register.show');
    Route::get('/{user}/edit', [RegisterController::class, 'edit'])->name('register.edit');
    Route::put('/{user}', [RegisterController::class, 'update'])->name('register.update');
    Route::delete('/{user}', [RegisterController::class, 'destroy'])->name('register.destroy');

});



// Rutas para la gestión de usuarios
//Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
//Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
//Route::get('/usuarios/{correo}', [UsuarioController::class, 'show'])->name('usuarios.show');
//Route::put('/usuarios/{correo}', [UsuarioController::class, 'update'])->name('usuarios.update');
//Route::delete('/usuarios/{correo}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
//

