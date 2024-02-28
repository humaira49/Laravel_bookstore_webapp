<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\HomeController2;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/hello', function () {
    return '<p style="font-size: 50px; text-align:center; color:red; margin-top: 20%;">Hello World! <br> This is my first project. </p>';
});
Route::get('/user/{id}', function ($id) {
    return 'welcome user '.$id;
});
Route::get('/home', function () {
    return view('home');
});
//Route::view('/about', 'about');     //tariqa asan naweshtan
 Route::view('/home', 'home', ['name'=>'Humaira']); //kar nadad.
//Route::redirect('/about', '/home');  //done */
//..........
//----------------------------------------------routes for accessing my project--------------------------------------------
Route::get('/bookstore', function () {
    return view('bookstore/bookstore');
});
Route::get('/about', function () {
    return view('bookstore/about');
});
Route::get('/home', function () {
    return view('bookstore/bookstore');
});
Route::get('/services', function () {
    return view('bookstore/service1');
});
Route::get('/service2', function () {
    return view('bookstore/service2');
});
Route::get('/Sign_in', function () {
    return view('bookstore/sign in');
});
//-------------------------------------------------------------------basic controller---------------------------------
/*Route::get('/controller', [HomeController::Class, 'first1']);
Route::get('/controller2', [HomeController::Class, 'second2']);
Route::get('/controller3/{id}', [HomeController::Class, 'userid']); */
//--------------------------------------------------------------------single action controller---------------------
//Route::get('/controller4/{var}', HomeController2::Class);
//.....
//------------------------------------------------------routes for retrieving data from 3 tables----------------------
Route::get('/account', [HomeController::Class, 'show']);
Route::get('/order', [HomeController::Class, 'show2']);
Route::get('/feedback', [HomeController::Class, 'show3']);
//-------------------------------------------------------routes for inserting data into 3 tables-------------------
Route::post('/signin', [HomeController::Class, 'show4']);
Route::get('/message', function () {
    return view('bookstore/message');
});
Route::post('/ordering', [HomeController::Class, 'show5']);
Route::post('/message', [HomeController::Class, 'show6']);
//------------------------------------------------------routes for deleting records in 3 tables----------------------------
Route::get('/accountdelete/{id}',[HomeController::Class, 'delete']);
Route::get('/orderdelete/{id}',[HomeController2::Class, '__invoke']);
Route::get('/feedbackdelete/{id}',[HomeController::Class, 'delete2']);
//------------------------------------------------------routes for updating records in 3 tables-------------------
Route::post('/orderedit',[HomeController::Class, 'edit']);
Route::post('/accountedit',[HomeController::Class, 'edit2']);
Route::post('/feedbackedit',[HomeController::Class, 'edit3']);


