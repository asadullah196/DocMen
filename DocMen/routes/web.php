<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Home Directory
Route::get('/', function () {
    return view('constructions/doctorBusy');
});


//Registration Directory
Route::get('/reg', function () {
    return view('constructions/registration');
});


//Login Directory
// Route::get('/login', function () {
//     return view('constructions/login');
// });

//Route::get('/login', 'AuthController@showLoginForm');
// Route::get("login",[AuthController::class,'showLoginForm']);


//new connection with controller. It get's new syntax now.
Route::get("login",[AuthController::class,'showLoginForm']);
