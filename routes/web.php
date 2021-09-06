<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadsController;
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
    return view('welcome');
});
Route::get('/home/{user}', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LogoutController::class,'store'])->name('logout');
Route::get('/leads/{user}', [LeadsController::class, 'index'])->name('leads');



Auth::routes();


