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

//default router
Route::get('/', function () {
    return view('welcome');
});

//another router
Route::get('/example', function () {      
    return "Hello javaTpoint";  
}); 

//routing parameters
Route::get('/post/{id}', function($id) {  
    return "id number is : ". $id;   
});  

//multiple routing parameters
Route::get('/post/{id}/{name}', function($id,$name) {  
    return "id number is : ". $id ." and name is ".$name;   
});  

//optional parameters
Route::get('user/{name?}', function ($name=null) {  
    return $name;  
}); 