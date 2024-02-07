<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\profesionUsuarioController;
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
    return view('welcome');
});


Route::get('formulario', [FormularioController::class, 'index']);
Route::post('formulario/store', [FormularioController::class, 'store'])->name('store');

Route::get('profesionUsuario', [profesionUsuarioController::class, 'index'])->name('profesionUsuario');