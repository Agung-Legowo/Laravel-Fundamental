<?php

use Illuminate\Support\Facades\Route; //namesapce
use App\Http\Controllers\AgungRamadhan; //import controller "AgungRamadhan"
use App\Http\Controllers\AgungController; //import controller "AgungController"

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


//ROUTING http://127.0.0.1:8000/agung
Route::get('agung', function () {
    return 'Muhammad Agung Ramadhan';
});


//PARAMETER WAJIB DISI http://127.0.0.1:8000/agung/1
Route::get('/agung/{id}', function ($id) {
    return 'Agung '.$id;
});


//PARAMETER TIDAK WAJIB DIISI http://127.0.0.1:8000/user/1
Route::get('/agung/{name?}', function ($name = null) {
    return $name; //user
});

Route::get('/user/{name?}', function ($name = 'agung') {
    return $name;
});


// ROUTE CONTROLLERS AgungRamadhan
Route::get('/AgungRamadhan', [AgungRamadhan::class, 'index']);


// ROUTE AGUNGCONTROLLER
Route::get('/Ramadhan', AgungController::class);


// ROUTE RESPONSE
Route::get('/response', function () {
    return 'Hello World';
});

 //	ROUTE RESPONS REDIRECT
Route::get('/dashboard', function () {
    return redirect('home/dashboard');
});

// ROUTE VIEWS
Route::get('/views', function () {
    return view('home', ['name' => 'Muhammad Agung Legowo Ramadhan']);
});




//ROUTE MIDDLWARE
//Route::get('/profile', function () {
    //
//})->middleware('CheckHeight');


//Route::get('/dashboard', function () {
    //
//})->middleware('role:admin');



//Route::get('/post/{id}', function ($id) {
    //
//})->middleware('role:author');

//ROUTE PREFIX
//Route::prefix('admin')->group(function () {

	//Route::get('/user', [UserController, 'index']);
	//Route::get('/post', [PostController, 'index']);
	//Route::get('/event', [EventController, 'index']);

//});