<?php

use App\Http\Controllers\inicioC;
use App\Http\Controllers\ProductoController;
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

Route::get('/prueba', function () {
    return view('welcome');
})->name('saludo');

// //esto es una ruta dinamica
// Route::get('/inicio/{nombre}',function($nombre){
//      echo "Hola bienvenido ".$nombre;
//      return view('inicio');
// });

// Route::get('/inicio/{nombre}',[inicioC::class,'saludar']);

// //que es un name dentro de las rutas=para asignarle un nombre a la ruta dentro del blade
// Route::get('/inicio/{nombre}',[inicioC::class,'saludar'])->name('Holiwis');


// Route::get("/producto",[ProductoController::class,'index']);

// Route::post("/producto",[ProductoController::class,'store']);

// Route::put("/producto/{id}",[ProductoController::class,'update']);

// Route::delete("/producto/{id}",[ProductoController::class,'destroy']);


Route::resource('/producto', ProductoController::class)->only(['index','store','update','destroy']);

Route::get('/productos',function(){
    return view('producto');
});