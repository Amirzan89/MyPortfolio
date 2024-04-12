<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
Route::get('/', function () {
    return inertia('app');
});
Route::post('/contact/email',[MailController::class,'send']);
Route::get('/testing', function(){
    return view('testing');
});
Route::get('/projects/{any}', 'ProjectsController@projects');
// Route::group(['prefix'=>'/projects'],function(){
//     Route::get('/', function () {
//         return view('home');
//     });
//     Route::get('/smarttrashku', function () {
//         return view('testing');
//     });
//     Route::get('/elok', function () {
//         return view('testing');
//     });
// });