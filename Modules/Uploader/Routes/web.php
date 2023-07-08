<?php

use Modules\Uploader\Http\Controllers\ImageController;
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

Route::prefix('panel/uploader')->group(function() {
    Route::prefix('images')->name('images')->group(function (){
        Route::get('initiate/{module}/{model}/{type}/{id}',[ImageController::class,'initiate'])->name('initiate');
        Route::post('upload/{module}/{model}/{type}/{id}',[ImageController::class,'uploadImage'])->name('upload');
        Route::post('delete/{module}/{model}/{type}/{id}',[ImageController::class,'detachImageFromMedia'])->name('delete');
    });
});
