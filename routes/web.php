<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
// Route::get('/home', function () {
    // return view('home');
// });
// Route::get('/products', [Controller::class,'Products'] ); 
// Route::get('/product-details/{id}', [Controller::class,'ProductsDetails'] ); 

Route::get('/categories',[CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
Route::post('/categories/save', [CategoryController::class, 'save'])->name('categories.save');
Route::get('/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/update/{id}', [CategoryController::class, 'updateShow']);
Route::post('/update', [CategoryController::class, 'updateCategory'])->name('category.updating');

Route::get('/createArticle', [ArticleController::class, 'create']);
Route::post('/createArticle/save', [ArticleController::class, 'save'])->name('article.save');
Route::get('/articles',[ArticleController::class, 'list'])->name('articles.list');
Route::get('/updateArticle/{id}', [ArticleController::class, 'updateGet']);
Route::post('/updateArticle', [ArticleController::class, 'updateArticle'])->name('article.updating');
Route::get('/deleteArticle/{id}', [ArticleController::class, 'delete']);