<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});

//Extension es PHP namespace resolver, doble click y espacio para rutas.
//resource nos permite ahorrarnos lineas de codigo para no tener que tener lineas de codigo por cada metodo de un controlador.
Route::resource('platillo', PlatilloController::class);

//php artisan route:list para ver las rutas que estan siendo creadas.


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
