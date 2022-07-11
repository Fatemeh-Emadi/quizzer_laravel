<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FinalScore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzController;

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

Route::get('/',[HomeController::class, "index"] );
Route::get('/question/{id}',[QuizzController::class, "index"] );
Route::post('/check-answer',[QuizzController::class, "check"]);
Route::get('/final',[FinalScore::class,"index"]);
Route::post('/add',[AdminController::class,"add"]);
Route::get('/admin-panel',[AdminController::class,"index"]);