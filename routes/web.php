<?php

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

Route::get('/', [\App\Http\Controllers\TweetController::class, 'index'])->name('home');

Route::get('/create', [\App\Http\Controllers\TweetController::class, 'create'])->name('tweet.create');
Route::post('/create', [\App\Http\Controllers\TweetController::class, 'store'])->name('tweet.store');

Route::get('/{tweet}', [\App\Http\Controllers\TweetController::class, 'show'] )->name('tweet.show');

Route::get('/{tweet}/edit', [\App\Http\Controllers\TweetController::class, 'edit'], )->name('tweet.edit');
Route::patch('/{tweet}/edit', [\App\Http\Controllers\TweetController::class, 'update'], )->name('tweet.update');
Route::delete('/{tweet}', [\App\Http\Controllers\TweetController::class, 'delete'], )->name('tweet.delete');


