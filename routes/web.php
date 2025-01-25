<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
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
    return view('landing');
});

Route::get('/about', function () {
    return view('pages.about');     
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/museum', function () {
    return view('pages.museum');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/home', function () {
    return redirect(route('home'));
});
Route::get('/chat-room', function () {
    return view('pages.chat');
});

Route::get('/chats', [ChatController::class, 'index']);
Route::post('/chats', [ChatController::class, 'store']);

// Temporary fix for unknown bug.
Route::get('/favicon.ico', function () {
    return redirect(route('home'));
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::resource('/posts', "App\Http\Controllers\PostController")->names('posts');
    Route::get('/feeds', "App\Http\Controllers\PostController@followers")->name('feeds');
    Route::resource('/manage/users', "App\Http\Controllers\UserController")->except(['create', 'show', 'store'])->names('users');
    Route::get('/user/{username}', "App\Http\Controllers\ProfileController@show")->name('profile');
});
