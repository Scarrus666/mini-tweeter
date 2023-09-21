<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TweetController;

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
    return view('welcome');
});

Route::get('tweets', [TweetController::class, 'index']);

Route::get('create', [TweetController::class, 'create']);

// Route::get('show', [TweetController::class, 'show']);

Route::get('tweets/{id}', [TweetController::class, 'show']);

Route::get('massage', [TweetController::class, 'massage']);

Route::delete('tweets/{id}', [TweetController::class, 'deleteTweet']);

Route::post('tweets', [TweetController::class, 'store']);
