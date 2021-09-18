<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('index');
});


Route::get('/articles', function() {
    return view("articles.index");
});


Route::get('/article', function() {
    return view('articles.article');
});



Route::group(['prefix' => 'auth'], function() {
    
    Route::get('/', function() {
        return view('auth.signin');
    })->name('signin');
    
    
    Route::get('/signup', function() {
        return view("auth.signup");
    })->name("signup");
    
});



Route::group(['prefix' => 'admin'], function() {
    Route::get('/',[AdminController::class,"index"])->name("Adam");
});
