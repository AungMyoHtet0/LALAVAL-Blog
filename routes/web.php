<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;


Route::resource('post',PostController::class);

Route::prefix('post')->group(function(){
		Route::get('/',[PostController::class, 'index']);
		Route::get('/create',[PostController::class, 'create'])->middleware('myAuth');
		Route::post('/',[PostController::class, 'store']);
		Route::get('/{id}',[PostController::class, 'show']);
		Route::get('/{id}/edit',[PostController::class, 'edit']);
		Route::put('/{id}',[PostController::class, 'update']);
		Route::delete('/{id}',[PostController::class, 'destroy']);
});


Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
Route::get('login',[LoginController::class,'create']);
Route::post('login',[LoginController::class,'store']);
Route::get('logout',[LoginController::class,'destroy']);