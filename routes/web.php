<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//http:/127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');
});

//http:/127.0.0.1:8000/about
Route::get('/about', function () {
    return view('/about');
});

//http:/127.0.0.1:8000/contact
Route::get('/contact', function () {
    return view('/contact');
});

Route::get('/post/{id}', function (string $id) {
   // return view ('Post');
    return '<h1>Post ID:'.$id.'</h1>';
});

//Optional parameter
Route::get('/post/{id?}/commemt/{commemtid}',
 function (string $id = null,string $commemt=null) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1><h2>'.$commemt.'</h2>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
});

//Regular Expression parameter
Route::get('/blog/{id}',function (string $id) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
})->where('id','[a-zA-Z]+');

