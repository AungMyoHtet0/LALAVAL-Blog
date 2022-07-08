<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPostController;
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

Route::get('my/post',[MyPostController::class,'index']);


Route::get('category',[CategoryController::class,'index'])->name('categories.index');
Route::get('category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('category/{id}',[CategoryController::class,'store'])->name('categories.store');
Route::put('category/{id}/edit',[CategoryController::class,'update'])->name('categories.update');
Route::delete('category/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');