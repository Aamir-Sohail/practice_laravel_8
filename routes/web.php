<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use App\Models\Customers;
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
Route::get('/data/{name}/{id?}', function ($name, $id = null) {
    //    return "Hello";
    echo $name . " ";
    echo $id;
    // $data =compact($name,$id);
    // return view('demo')->with($data);
});
//showing the view page data....
Route::get('/data/{name}/{id?}', function ($name, $id = null) {
    $data =  compact('name', 'id');
    return view('demo')->with($data);
});




// New Project For function.....
Route::get('function/{name?}', function ($name = null) {
    $demo = "<h2> The new Mehtode in Laravel </h2>";
    $data = compact('name', 'demo');
    return view('home1')->with($data);
});



// The new PrOject Routes For layout

Route::get('home', function () {
    return view('layouts.home');
});


Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/courses', function () {
    return view('layouts.courses');
});


// NEW Project with ForntEnd routes..
Route::get('/index', [DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'aboutpage']);

// Route::get('/course',[DemoController::class,'coursespage']);
// singleActionController is used for single function array not used..
Route::get('/course', SingleActionController::class);
//Route for Nlew Controller PhotoController which work as a Resouce Controller.
Route::resource('/photo', PhotoController::class);



Route::get('/register', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'store']);

//  New Routes
Route::get('/customer', function () {
    $customers = Customers::all();
    echo "<pre>";
    print_r($customers->toArray());
});

//New Routes for Crud Operation..
Route::get('/customers', [CustomersController::class, 'index'])->name('customers.view');
Route::get('/view', [CustomersController::class, 'view'])->name('view.data');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customer.create');
Route::post('/customers', [CustomersController::class, 'store']);
Route::get('/', [CustomersController::class, 'Navbar']);
Route::get('/customers/delete/{id}', [CustomersController::class, 'delete'])->name('customer.delete');
Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customer.edit');
Route::post('/customers/update/{id}', [CustomersController::class, 'update'])->name('customer.update');
Route::get('/customer/trash',[CustomersController::class,'Trash']);
Route::get('/customers/restore/{id}', [CustomersController::class, 'Restore'])->name('customer.restore');
Route::get('/customers/force-delete/{id}', [CustomersController::class, 'Forcedelete'])->name('customer.force-delete');

//this route is set t0 show all session ....
Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});
// in this session the data is set ...
Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Aamir Sohail');
    $request->session()->put('id', '123');
    $request->session()->flash('status', 'Success');
    return redirect('get-all-session');
});
//
Route::get('destory-session', function () {
    session()->forget('name', 'id');
    // session()->forget('id');
    return redirect('get-all-session');
});
