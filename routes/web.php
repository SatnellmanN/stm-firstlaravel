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
Route::get('/openRegisPage', function () {
    return view('registerPage');
});

Route::get('/submitLogin', function () {
    return "Submitted!!";
});

Route::get('/', function () {
    return view('welcome');
});
