<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('app.about');
});
Route::get('/contact', function () {
    return view('app.contact');
});
