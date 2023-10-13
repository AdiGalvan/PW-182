<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio');//despues de class el nombre de la funcion, lo que dice es cuando accedamos a la ruta inicio mandame al controlador 

Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario');

Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos');































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
*/
/*
Route::view( '/', 'welcome')->name('apodoInicio');
Route::view( '/formulario', 'formulario')->name('apodoFormulario');
Route::view( '/recuerdos', 'recuerdos')->name('apodoRecuerdos');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/