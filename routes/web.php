<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
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

Route::view('/admin','cms.parent');
Route::view('/index','cms.Table.index');
Route::view('/login','cms.outh.login');

Route::resource('Cars',CarController::class);
Route::resource('category',CategoryController::class);
