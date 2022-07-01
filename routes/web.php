<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
use App\Http\Middleware\CheckStatus;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(["middleware"=>"web"],function(){
Route::view('/','layout');
Route::get('/',[RestoController::class,'home']);
Route::get('/add',[RestoController::class,'add']);
Route::post('/create',[RestoController::class,'create']);
Route::get('/list',[RestoController::class,'list']);
Route::get('/edit/{id}',[RestoController::class,'edit']);
Route::put('/edit',[RestoController::class,'update']);
Route::get('/delete/{id}',[RestoController::class,'delete']);
Route::view('/register','register');
Route::post('/register',[RestoController::class,'register']);
Route::view('/login','login')->name('login');
Route::post('/login',[RestoController::class,'login'])->name('login.submit');
Route::get('/logout',[RestoController::class,'logout']);
});







