<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisteredUserController;

Route::get('/', [JobController::class,'index']);


Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[RegisteredUserController::class,'create']);
Route::post('/login',[RegisteredUserController::class,'store']);

Route::get('/logout',[RegisteredUserController::class,'destroy']);
