<?php

use App\Http\Controllers\Controller;
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

Route::view('/', 'welcome')->name('Inicio');

Route::view('/paginaUno', 'paginaUno')->name('MostrarTablas');
// Route::view('/paginaUno', 'paginaDos')->name('MostrarTablas');
// Route::view('/paginaUno', 'paginaTres')->name('MostrarTablas');
// Route::view('/paginaUno', 'paginaUno')->name('MostrarTablas');
// Route::view('/paginaUno', 'paginaUno')->name('MostrarTablas');
Route::post('/subir', [Controller::class, 'subirArchivo'])->name('subir');