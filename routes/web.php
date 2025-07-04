<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserCommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PostController::class, 'index']);
// Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

// Route::get('/users/{id}/comments', [UserCommentController::class, 'index'])->name('users.comments');
Route::get('/users/{user}/comments', [UserCommentController::class, 'showUserComments'])->name('users.comments');