<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){
    Route::post('/tweets', [App\Http\Controllers\TweetController::class, 'store']);
    Route::get('/tweets', [App\Http\Controllers\TweetController::class, 'index'])->name('home');
    Route::post('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'delete']);
    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowsController::class, 'store']);
    Route::get('/profiles/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'showEdit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'update']);
    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index'])->name('explore');
});

Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');