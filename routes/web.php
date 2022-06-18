<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

//Route::get('post',[PostController::class, 'index']);
//Route::get('post/create',[PostController::class, 'create']);
//Route::post('post',[PostController::class, 'store']);
//Route::get('post/{id}',[PostController::class, 'show']);
//Route::get('post/{id}/edit',[PostController::class, 'edit']);
//Route::put('post/{id}',[PostController::class, 'update']);
//Route::delete('post/{id}',[PostController::class, 'destroy']);

Route::resource('post',PostController::class);
Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
Route::get('login',[LoginController::class,'create']);
Route::post('login',[LoginController::class,'store']);
Route::get('logout',[LoginController::class,'destroy']);