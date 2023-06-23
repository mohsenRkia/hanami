<?php

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
use Illuminate\Support\Facades\Route;
use Modules\Tour\Http\Controllers\TourController;

Route::prefix('panel')->name('panel.')->group(function () {
    Route::prefix('tours')->name('tours.')->group(function() {
        Route::get('/', [TourController::class,'index'])->name('index');
        Route::get('/create', [TourController::class,'create'])->name('create');
        Route::post('/quick/store', [TourController::class,'quickStoreTour']);

    });
});
