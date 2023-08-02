<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\FileUploadController;

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

Route::get('/imagen/{nombreImagen}', function ($nombreImagen) {
    return response()->file(public_path('imagen/' . $nombreImagen));
})->name('mostrar.imagen');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/estudiantes', EstudianteController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/obras', ObraController::class);
});

