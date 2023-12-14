<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/testing', function () {
    return view('testing');
});
Route::group(['prefix'=>'/projects'],function(){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/smarttrashku', function () {
        return view('testing');
    });
    Route::get('/elok', function () {
        return view('testing');
    });
});