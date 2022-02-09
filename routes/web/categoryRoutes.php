<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categories',[CategoryController::class, 'list'])->name('categories.list')->middleware(['auth']);
Route::get('/create', [CategoryController::class, 'create'])->middleware(['auth','isAdmin']);
Route::post('/categories/save', [CategoryController::class, 'save'])->name('categories.save');
Route::get('/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/update/{id}', [CategoryController::class, 'updateShow']);
Route::post('/update', [CategoryController::class, 'updateCategory'])->name('category.updating');
Route::get('/category-articles/{id}', [CategoryController::class, 'showAllArticles']);

