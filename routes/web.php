<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\bibliotecaController;

Route::get('/', [bibliotecaController::class,'metodoWelcome'])->name('apodoWelcome');
Route::get('/resgistrar', [bibliotecaController::class,'metodoResgistrar'])->name('apodoRegistrar');
Route::post('/guardarlibro', [bibliotecaController::class,'metodoGuardar'])->name('guardarLibro');

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
