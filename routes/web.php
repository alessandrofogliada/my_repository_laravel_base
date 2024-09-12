<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/' , [PageController::class ,'index'])->name('home');
Route::get('/contatti' , [PageController::class , 'contacts'])->name('contacts');
Route::get('/chi-siamo' , [PageController::class ,'about'])->name('about');
