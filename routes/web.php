<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\MailController;
Route::group(['middleware'=>'cors'],function(){
    // Route::get('/', 'ProjectsController@home');
    Route::get('/',[ProjectsController::class,'home']);
    Route::post('/contact/email',[MailController::class,'send']);
    Route::get('/testing', function(){
        return view('testing');
    });
    Route::get('/cv', function(){
        return view('cv');
    });
    Route::get('/projects/{any}', 'ProjectsController@projects');
});