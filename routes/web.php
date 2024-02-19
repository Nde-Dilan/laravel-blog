<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
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

Route::get('/posts', [PostController::class,'index'])->name('home');

Route::get('/about-us',[SiteController::class, 'about'])->name("about-us");
Route::get('/posts/category/{category:slug}',[PostController::class, 'byCategory'])->name("by-category");
Route::get('/posts/{post:slug}',[PostController::class, 'show'])->name("view");