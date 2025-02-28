<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', HomeController::class); 
Route::get('/jobs', [JobController::class,'index']); 
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}' ,TagController::class);

Route::middleware(['auth', 'role:employer'])->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);
});

Route::get('/companies',[EmployerController::class,'index']);
Route::get('/companies/{id}',[EmployerController::class,'show']);

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisteredUserController::class,'create']);
    Route::post('/register',[RegisteredUserController::class,'store']);
    
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
});


Route::delete('/logout',[SessionController::class,'destroy'])->middleware('auth');
