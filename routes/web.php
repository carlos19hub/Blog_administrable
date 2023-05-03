<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Ruta para mostrar el contenido del post
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

// filtrar por categoria
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

// redireccion a cada una de las etiquetas
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
