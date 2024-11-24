<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
Route::get('/',HomeController::class);//solo se pasa el controller
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
