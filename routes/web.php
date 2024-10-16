<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

// Route::get('/', function () {
//     return view('allPosts', [
//         'posts' => Post::where('active', true)->get()
//     ]);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', function () {
    // llama a la vista allPosts que contiene todos los registros disponibles
    return view('projects');
});

// pagina de error reemplazada por la vista para crear posts
Route::get('/posts', function () {
    // llama a la vista allPosts que contiene todos los registros disponibles
    return view('errorPage');
});

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'view'])->name('posts.view');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');





Route::get('/blog', function () {
    // llama a la vista allPosts que contiene todos los registros disponibles
    return view('allPosts', [
        // ?
        'posts' => Post::where('active', true)->get()
    ]);
});

Route::get('/blog/search', [PostController::class, 'search'])->name('blog.search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
