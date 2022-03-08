<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //get request injection

Route::get('/intro', function () {
    return 'hello world';
}); //1

Route::get('/', function () {
    return view('welcome');
}); //2

Route::get('/contact-us', function (Request $request) {
    dd($request);
});//3

Route::view('/index','welcome', ['$namename' => 'Mina']); //uri, +filename, data

Route::get('/user/{id}', function ($id){
    return 'User id:'.$id;
});//4

Route::get('/post/{post}/comments/{comments}', function ($postID, $commentsID){ //order of the parameters are required
    return 'Post id:'.$postID.'Comments id:'.$commentsID;
});//5


Route::get('/username/{name?}', function($name = ''){
    return $name;
}) ->where('name', '[a-z]+'); //->where('id', '[0-9]+');  ->where('name', '[A-Za-z]+'); 
//optional parameters... or strict params patterns


//organized prefix with same connect pages or routes into a group
Route::prefix('/admin')->group(function (){
    Route::get('/dashboard', function (){
        return 'dashboard';
    });
    Route::get('/reports', function (){
        return 'reports';
    });
    Route::get('/user-management', function (){
        return 'user-management';
    });
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
