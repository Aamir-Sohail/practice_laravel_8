<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;

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

Route::get('homepage', function () {
    return view('welcome');
});

// new routes for testing;
Route::get('/demo', function () {
    echo "My New laravel Project";
});
Route::post('/test ', function () {
    echo "My New post laravel Project";
});

Route::put('puts /{id} ', function ($id) {
    echo "My New puts laravel Project";
});

Route::delete('user/{delete}', function ($id) {
    echo "My New  laravel Project Delete";
});
//use for get and post methode......Any
// the any provide by laravel... not other sources...
Route::any('/test ', function () {
    echo "My New any laravel Project";
});
//for new pages
Route::get('/demo', function () {
    return view('demo');
});
//this routes is used for the show the specfic name /data in url also add id/
// Route::get('/data/{name}/{id?}', function ($name,$id = null){
//         //    return "Hello";
//             echo $name . " ";
//             echo $id;
//             // $data =compact($name,$id);
//             // return view('demo')->with($data);
// });
//showing the view page data....
Route::get('/data/{name}/{id?}', function ($name, $id = null) {
    $data =  compact('name', 'id');
    return view('demo')->with($data);
});




// New Project For function.....
Route::get('function/{name?}', function ($name = null) {
    $demo = "<h2> The new Mehtode in Laravel </h2>";
    $data = compact('name','demo');
    return view('home1')->with($data);
});



// The new PrOject Routes For layout

Route::get('home',function( ){
return view('layouts.home');

});


Route::get('/about',function(){
    return view('layouts.about');
    });

    Route::get('/courses',function(){
        return view('layouts.courses');
        }); 


        // NEW Project with ForntEnd routes..
        Route::get('/',[DemoController::class,'index']);
        Route::get('/about',[DemoController::class,'aboutpage']);
        // Route::get('/course',[DemoController::class,'coursespage']);
        // singleActionController is used for single function array not used..
        Route::get('/course',SingleActionController::class);