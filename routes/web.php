<?php

use App\Http\Controllers\RestoController;
use App\Models\Restaurant;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[RestoController::class,'index']);
Route::get('/list',[RestoController::class,'list']);
Route::post('/add',[RestoController::class,'add']);
Route::get('/edit/{id}',[RestoController::class,'edit']);
Route::put('/edit/{id}',[RestoController::class,'update']);
Route::get('/delete/{id}',[RestoController::class,'delete']);
Route::view('/add','add');