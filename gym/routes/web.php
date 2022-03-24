<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

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


Route::get('posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('about', [AboutController::class, '__invoke'])->name('about');

Route::get('contact', [ContactController::class, '__invoke'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
