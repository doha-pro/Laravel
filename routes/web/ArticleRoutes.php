<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/createArticle', [ArticleController::class, 'create'])->middleware(['auth','isAdmin']);;
Route::post('/createArticle/save', [ArticleController::class, 'save'])->name('article.save');
Route::get('/articles',[ArticleController::class, 'list'])->name('articles.list')->middleware(['auth','isAdmin','age']);;
Route::get('/updateArticle/{id}', [ArticleController::class, 'updateGet']);
Route::post('/updateArticle', [ArticleController::class, 'updateArticle'])->name('article.updating');
Route::get('/deleteArticle/{id}', [ArticleController::class, 'delete']);