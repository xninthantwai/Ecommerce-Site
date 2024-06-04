<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/view/{id}', [ProductController::class, 'view']);

Route::get('/products/delete/{id}', [ProductController::class, 'delete']);

Route::get('/products/add', [ProductController::class, 'add'])->middleware('auth');

Route::post('/products/add', [ProductController::class, 'create']);

Route::post('/comments/add', [CommentController::class, 'create'])->middleware('auth');

Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
