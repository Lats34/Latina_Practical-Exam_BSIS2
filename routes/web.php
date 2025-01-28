<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Post routes
Route::resource('posts', PostController::class);
Route::post('posts/{post}/pin', [PostController::class, 'pin'])->name('posts.pin');
Route::post('posts/{post}/unpin', [PostController::class, 'unpin'])->name('posts.unpin');
Route::post('posts/{post}/archive', [PostController::class, 'archive'])->name('posts.archive');
Route::post('posts/{post}/unarchive', [PostController::class, 'unarchive'])->name('posts.unarchive');
