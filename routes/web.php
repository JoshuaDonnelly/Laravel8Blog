<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

// Remove the news route
// Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/posts', [App\Http\Controllers\AdminController::class, 'posts'])->name('admin.posts');
    Route::get('/posts/create', [App\Http\Controllers\AdminController::class, 'createPost'])->name('admin.posts.create');
    Route::post('/posts', [App\Http\Controllers\AdminController::class, 'storePost'])->name('admin.posts.store');
    Route::get('/posts/{id}/edit', [App\Http\Controllers\AdminController::class, 'editPost'])->name('admin.posts.edit');
    Route::put('/posts/{id}', [App\Http\Controllers\AdminController::class, 'updatePost'])->name('admin.posts.update');
    Route::delete('/posts/{id}', [App\Http\Controllers\AdminController::class, 'deletePost'])->name('admin.posts.delete');
});

