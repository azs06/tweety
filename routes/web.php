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
    Route::post('/profiles/{user:name}/follow', [App\Http\Controllers\FollowsController::class, 'store']);
    Route::get('/profiles/{user:name}/edit', [App\Http\Controllers\ProfilesController::class, 'showEdit'])->middleware('can:edit,user');
});

Route::get('/profiles/{user:name}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');