<?php

use App\Http\Controllers\GameController;
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

Route::get('/home',[GameController::class,'index']);

Route::get('/add',[GameController::class,'add']);

Route::post('/store',[GameController::class,'store']);

Route::get('/{id}/edit',[GameController::class,'edit']);

Route::put('/update/{id}',[GameController::class,'update']);

Route::delete('/update/{id}',[GameController::class,'destroy']);
