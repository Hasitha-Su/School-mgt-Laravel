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

//named routes
Route::get('student/latest/example',array   
('as'=>'student.latest',function()  
{  
   $url=route('student.latest');  
   return "The url is : " .$url;  
}));


//Navigating from one route to another using named routes
Route::Get('/student_view',function()  
{  
  return view('student');  
});  


Route::get('student/details',function()  
{  
  $url=route('student.details');  
 return $url;  
})->name('student.details');

//middleware auth added
Route::get('admin/profile', function () {
    //
})->middleware('checkAge');

//Assigning Middleware to Route
Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'TestController@showProfile'
]);

Route::get('/testcontroller/path',[
    'middleware' => 'First',
    'uses' => 'TestController@showPath'
 ]);

//student controller
Route::resource('photos', 'PhotoController'); 