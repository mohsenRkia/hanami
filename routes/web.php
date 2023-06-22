<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\ContactUsController;
>>>>>>> majid

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

<<<<<<< HEAD
    Route::get('/',function (){
       dd('ll');
    });
=======
//    Route::get('/',function (){
//    return view('app');
//    });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('/contactUs', ContactUsController::class);
>>>>>>> majid
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


Auth::routes();

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> majid
