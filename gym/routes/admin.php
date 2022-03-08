<?php

use App\Http\Controllers\Admin\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InstructorController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categorias', CategoriaController::class)->names('admin.categorias');
// Route::get('categorias',[CategoriaController::class, 'index'])->name('admin.categorias.index');
// Route::get('categorias/create',[CategoriaController::class, 'create'])->name('admin.categorias.create');
// Route::post('categorias',[CategoriaController::class, 'store'])->name('admin.categorias.store');
// Route::get('categorias/{categoria}',[CategoriaController::class, 'show'])->name('admin.categorias.show');
// Route::get('categorias/{categoria}/edit',[CategoriaController::class, 'edit'])->name('admin.categorias.edit');
// Route::put('categorias/{categoria}',[CategoriaController::class, 'update'])->name('admin.categorias.update');
// Route::delete('categorias/{categoria}',[CategoriaController::class, 'destroy'])->name('admin.categorias.destroy');

Route::resource('instructors', InstructorController::class)->names('admin.instructors');