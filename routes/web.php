<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Controller;

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

Auth::routes();

Route::get('/', function(){
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/experiance', function () {
    return view('experiance');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
