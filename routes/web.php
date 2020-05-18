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
    return view('home_page');
});
Route::get('/myindex', function () {
    return view('index1');
});
Route::get('/mytest', function () {
    return view('test_template');
});
Route::resource('/user','UserController');
