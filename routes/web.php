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




// New Project For ForntEnd.....
Route::get('/{name?}', function ($name = null) {
    $data = compact('name');
    return view('home')->with($data);
});
