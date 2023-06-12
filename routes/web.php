<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [TweetController::class, 'index'])->name('home');

Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/logout', [AuthController::class, 'setLoggedOut'])->name('logout');
Route::get('/auth/login/{user}', [AuthController::class, 'setLoggedIn'])->name('auth.loginAs');


Route::get('/create', [TweetController::class, 'create'])->middleware('auth')->name('tweet.create');
Route::post('/create', [TweetController::class, 'store'])->middleware('auth')->name('tweet.store');

Route::get('/{tweet}', [TweetController::class, 'show'] )->name('tweet.show');

Route::get('/{tweet}/edit', [TweetController::class, 'edit'], )->middleware('auth')->name('tweet.edit');
Route::patch('/{tweet}/edit', [TweetController::class, 'update'], )->middleware('auth')->name('tweet.update');
Route::delete('/{tweet}', [TweetController::class, 'delete'], )->name('tweet.delete');


