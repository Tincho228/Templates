<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostController;


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


Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');


Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');