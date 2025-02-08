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
    return view('Welcome');
}); 

Route::get('foo', function () {
    return view('Hello Word');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function($postId, $commentsId){
    //
});

Route::get('/user', 'UserController@index');
Route::get('/user', [UserController::class, 'index']);

Route::match(['get', 'post'], '/', function(){
//
});

Route::any( '/', function(){
    //
});


