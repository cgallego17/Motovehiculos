<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;

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



// Route::get('/publicacion', function(){
//   return view('publicacion.index');
// });

// Route::get('/publicacion/create', [PublicacionController::class, 'create']);


Route::get('/', [App\Http\Controllers\VehiController::class, 'welcome'])->name('inicio');

// Route::view('/vehiculos', 'vehiculos', ['name' => 'vehiculos']);
Route::get('/vehiculos', [App\Http\Controllers\VehiController::class, 'vehiculos'])->name('vehiculos');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

  // Las rutas que incluyas aquí pasarán por el middleware 'auth'
  
  Route::get('/publicar', [App\Http\Controllers\HomeController::class, 'index'])->name('publicar');
  Route::resource('publicacion', PublicacionController::class);

});


