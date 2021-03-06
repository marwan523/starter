<?php

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
    return view('welcome')->with(['string' => 'marwan hassan', 'age' => 25 ]);
});

Route::get('index', 'FirstController@index');
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/aboute', function () {
    return view('aboute');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');//verify for sen mail 

Route::get('/', function () {
    return 'Home';
});
