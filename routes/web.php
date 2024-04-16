<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
Route::group(['middleware'=>'cors'],function(){
    Route::get('/',[HomeController::class,'home']);
    Route::post('/contact/email',[MailController::class,'send']);
    Route::get('/testing', function(){
        return view('testing');
    });
    Route::get('/cv', function(){
        return view('cv');
    });
    Route::post('/download/cv',[HomeController::class,'downloadCV']);
    Route::get('/projects', 'HomeController@projects');
    Route::get('/projects/{any}', 'HomeController@detailProject');
});