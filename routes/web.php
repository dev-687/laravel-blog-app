<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;



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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('home.show');

Route::post('/posts/comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('comments', CommentController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});

Route::resource('comments', CommentController::class);


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
