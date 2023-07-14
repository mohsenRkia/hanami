<?php

use Modules\Article\Http\Controllers\ArticleController;

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

Route::prefix('panel')->name('panel.')->group(function () {
    Route::prefix('article')->group(function () {
        Route::resource('/articles', ArticleController::class);
    });
    Route::post('/articles/quick/store', [ArticleController::class,'quickStore']);
    Route::put('/articles/update/{id}', [ArticleController::class,'updateArticle']);
});
