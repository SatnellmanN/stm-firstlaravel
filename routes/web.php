<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;
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

Route::post('submitLogin', function () {
    return "Submitted!!";
});

Route::get('/', function () {
    if(!session()->has('ssusername')){
        return view('LoginPage');
    }
    else{
        return redirect('index');
    }
});

Route::get('Logoutss', function () {
    if(session()->has('ssusername')){
        session()->pull('ssusername');
    }
    return redirect('/');
    //cm
});

Route::post('CreateUserFc',[CreateUserController::class,'store']);

Route::post('storeEmployee',[CreateUserController::class,'storeEmployee'])->middleware('check');

Route::post('loginAction',[CreateUserController::class,'loginAction']);

Route::get('index',function(){
    return view('index');
})->middleware('check');

Route::get('AddEmployee',function(){
    return view('AddEmployee');
})->middleware('check');

Route::get('ShowEmployee',[CreateUserController::class,'showEmployeeAction'])->middleware('check');

