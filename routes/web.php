<?php

use App\Http\Controllers\allNewsController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Cours
Route::get('/courses', [courseController::class, 'index']);

Route::get('/courses/coursepresentation', function () {
    return view('coursepresentation');
});

Route::get('/courses/coursepresentation/coursesession', function () {
    return view('coursesession');
});


// News
Route::get('/allnews', [allNewsController::class, 'index']);

Route::get('//allnews/news', function () {
    return view('news');
});

// Forum
Route::get('/forum', function () {
    return view('forum');
});

Route::get('/lives', function () {
    return view('alllives');
});