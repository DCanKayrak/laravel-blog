<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PostController::class,'index'])->name('home');
Route::post('/posts',[PostController::class,'store']) -> middleware('auth');
Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('categories/posts/{category:slug}',[PostController::class,'getWithCategory']);
Route::get('users/posts/{user:username}',[PostController::class,'getWithUser']);

Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');;

Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');

Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');

Route::post('/posts/{post:slug}/message',[PostCommentController::class,'store'])->middleware('auth');

Route::middleware(['auth','admin'])->group(function (){
    Route::prefix('/admin')->group(function (){
        Route::get('/',[AdminController::class,'index']);
    });
}
);
