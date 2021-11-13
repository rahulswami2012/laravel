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
    return view('welcome');
});

// Route Returning String
Route::get('about', function(){
    return "Hello World";
});

// Route Parameter
Route::get('user/{u_id}', function($id){
    return $id;
});

// Route Multiple  Parameter
Route::get('post/{post_id}/comment/{comment_id}', function($post_id, $comment_id){
    // return $post_id . $comment_id;
    return "Post ID: " . $post_id . " Comment ID: " . $comment_id;
});

// Route Optional  Parameter
Route::get('student/{name?}', function($name = null){
    return "Hello" . $name;
});

// Route Optional  Parameter
// Route::get('student/{name?}', function($name = 'Sonam'){
//     return "Hello" . $name;
// });

// Route Parameter with Regular Expression
Route::get('product/{p_name}', function($name){
    return "Product Name: " . $name;
})->where('p_name', '[A-Za-z]+');

// Route Parameter with Regular Expression
Route::get('manager/{id}/{name}', function($id, $name){
    return "Manager ID: " . $id . " Manager Name: " . $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);

// Route Parameter with Regular Expression Helper Methods
Route::get('employee/{id}/{name}', function($id, $name){
    return "Employee ID: " . $id . " Employee Name: " . $name;
})->whereNumber('id')->whereAlpha('name');

// Route Redirection
Route::redirect('yaha', 'waha');

// Route Redirection with status code
Route::redirect('yaha1', 'waha1', 301);

// Route Permanent Redirection
Route::permanentRedirect('yaha2', 'waha2');

// Fallback Route
Route::fallback(function(){
    return "Defualt Message";
});

