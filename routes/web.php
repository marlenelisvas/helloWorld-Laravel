<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadManager;
Route::get('/',HomeController::class);//solo se pasa el controller
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get("/upload", [UploadManager::class, 'upload']);
Route::post("/upload", [UploadManager::class, 'uploadPost'])->name("upload.post");