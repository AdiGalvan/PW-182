<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libroController;


Route::get('/',[libroController::class,'metodoPrincipal'] )->name('apodoPrincipal');
Route::get('/registrar',[libroController::class,'metodoRegistrar'] )->name('apodoRegistrar');


Route::post('/guardarLibro',[libroController::class,'metodoGuardar'] )->name('apodoGuardar');

















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

/* Route::get('/', function () {
    return view('registrar_libro');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */

