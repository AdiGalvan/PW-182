<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;


// Rutas individuales para controlador
Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio');
Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario');
Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos');


Route::post('/guardarRecuerdo',[diarioController::class,'metodoGuardar'] )->name('guardar');// la cuarta ruta debe ser post, y esta es por conveniencia
















// Rutas agrupadas tipo controlador
/*
Route::controller(diarioController::class)->group(function (){

    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/formulario','metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
}); //diariocontroller pasa a ser un parametro y despues se dice que se van a agrupar en el group qu son las tres de arriba
//dentro de group se pasa una funcion anonima y se pasan las 3 rutas con su nombre

*/
































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