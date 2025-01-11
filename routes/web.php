<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('app.about');
});
Route::get('/contact', function () {
    return view('app.contact');
});
Route::get('/chat-room', function () {
    return view('app.chat');
});

Route::get('/chats', [ChatController::class, 'index']);
Route::post('/chats', [ChatController::class, 'store']);
