<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\ActivitiesController;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/{user}', [HomeController::class, 'index'])->name('home');

Route::get('/leads/{user}', [LeadsController::class, 'index'])->name('leads');
Route::get('/contacts/{user}', [ContactsController::class, 'index'])->name('contacts');
Route::get('/accounts/{user}', [AccountsController::class, 'index'])->name('accounts');
Route::get('/deals/{user}', [DealsController::class, 'index'])->name('deals');
Route::get('/activities/{user}', [ActivitiesController::class, 'index'])->name('activities');
Route::get('/logout', [LogoutController::class,'store'])->name('logout');



