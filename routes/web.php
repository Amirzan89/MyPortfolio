<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/testing', function () {
    return view('testing');
});