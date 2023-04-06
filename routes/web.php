<?php

use App\Http\Controllers\MahasiswaController;
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
Route::get('/',[MahasiswaController::class, 'index']);
Route::get('/read',[MahasiswaController::class, 'read']);
Route::get('/create',[MahasiswaController::class, 'create']);
Route::get('/store',[MahasiswaController::class, 'store']);
//Route::get('/', function () {
  //  return view('welcome');
//});
