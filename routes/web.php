<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('about',[webController::class,'webAbout']);
Route::post('insert_form',[webController::class,'webInsert'])->name('insert_form');

Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class,'idex'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
