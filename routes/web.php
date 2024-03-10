<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/posts', [PostController::class,'index'])->name('home');

Route::get('/about-us',[SiteController::class, 'about'])->name("about-us");
Route::get('/posts/category/{category:slug}',[PostController::class, 'byCategory'])->name("by-category");
Route::get('/posts/{post:slug}',[PostController::class, 'show'])->name("view");


/**
 * Fallback route
 *It will redirect to the home page if the route is not found
 
 */
// Route::fallback(function () {
//     return redirect('/');
// });

require __DIR__.'/auth.php';
