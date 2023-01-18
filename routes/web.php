<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductController;//importar
use App\Http\Controllers\StudyController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\AppEjemplo;
use App\Http\Controllers\AsignaturaController;


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


//ejemplos



Route::get('/', function () {
    //echo "hola";
    return view('welcome');
    //echo "<a href ='" .route('infoasig') . "'>Mostrar informacion Asignatura </a><br>";//aqui usamos route infoasig(alias de la ruta) para no escribir toda la ruta
});

Route::resource('products',ProductController::class);//Rutas de ProductController

/*
Route::get('/informacion-asignatura',[AppEjemplo::class,'mostrarinformacion']
)->name('infoasig');//alias infoasig para la ruta de arriba

Route::resource('products',ProductController::class);//Rutas de ProductController




Route::resource('asignaturas',AsignaturaController::class);//Rutas de AsignaturaController


//ejemplos

Route::get('/informacion-asignatura',[AppEjemplo::class,'mostrarinformacion']
)->name('infoasig');//alias infoasig para la ruta de arriba

Route::get('/', function () {
    //echo "hola";
    //return view('welcome');
    echo "<a href ='" .route('infoasig') . "'>Mostrar informacion Asignatura </a><br>";//aqui usamos route infoasig(alias de la ruta) para no escribir toda la ruta
});


Route::get('/hola', function ()
{
   return $_SERVER;
   dd($_SERVER);
});

Route::get('/hola/{nombre}', function ($nombre)
{
    echo "Hola $nombre";
});

Route::get('/saludo/{nombre?}', function ($nombre = "Mundo")
{
    echo "Hola $nombre";
});

/*
Route::get('/studies', [StudyController::class,'index']);
Route::get('/studies/create', [StudyController::class,'create']);
Route::get('/studies/{id}/edit', [StudyController::class,'edit']);
Route::get('/studies/{id}', function($id)
{
    echo "el modulo con id : $id ";

})->where('id','[0-9]+');


Route::delete('/studies/{id}', [StudyController::class,'destroy']);
Route::put('studies/{id}', [StudyController::class,'update']);
Route::post('studies', [StudyController::class, 'store']);


Route::get('prueba2/{name}', [PruebaController::class, 'saludoCompleto']);

Route::resource('/studies', StudyController::class);
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
