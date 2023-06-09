<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

// llamamos el controlador para el crud admin
Route::resource('categories', CategoryController::class)->names('admin.categories');

// llamamos el controlador para el crud tags

Route::resource('tags', TagController::class)->names('admin.tags');


Route::resource('posts', PostController::class)->names('admin.posts');
