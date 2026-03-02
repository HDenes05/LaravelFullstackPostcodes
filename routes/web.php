<?php

use App\Http\Controllers\Countycontroller;
use Illuminate\Support\Facades\Route;
use App\Models\County;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/county', [Countycontroller::class, 'index'])->name('county.index');
Route::get('/county/create', [Countycontroller::class, 'create'])->name('county.create');
Route::post('/county', [Countycontroller::class, 'store'])->name('county.store');

Route::get('/county/{id}', [Countycontroller::class, 'show'])->name('county.show');
Route::get('/county/{id}/edit', [Countycontroller::class, 'edit'])->name('county.edit');
Route::patch('/county/{id}', [Countycontroller::class, 'update'])->name('county.update');
Route::delete('/county/{id}', [Countycontroller::class, 'destroy'])->name('county.destroy');



//Route::resource('county', Countycontroller::class);

// Route::get('/county', [Countycontroller::class, 'index'])->name('county.index');
// Route::get('/county/create', [Countycontroller::class, 'create'])->name('county.create');
// Route::get('/county/{id}', [Countycontroller::class, 'show'])->name('county.show');
// Route::get('/county/{id}/edit', [Countycontroller::class, 'edit'])->name('county.edit');
// Route::post('/county/store', [Countycontroller::class, 'store'])->name('county.store');
// Route::patch('/county/{id}', [Countycontroller::class, 'update'])->name('county.update');
// Route::delete('/county/{id}', [Countycontroller::class, 'destroy'])->name('county.destroy');

// Route::get('/county/create', [Countycontroller::class, 'create'])->name('county.create');


// ->except('index', 'show');

// Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
// Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
// Route::patch('/categories/{category}', [CategorysController::class, 'update'])->name('categorys.update');
// Route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');