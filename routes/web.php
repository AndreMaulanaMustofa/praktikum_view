<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class], 'welcome');

Route::get('/checkout', [PageController::class], 'checkout');

Route::get('/contact', [PageController::class], 'contact');

Route::get('/experiance', [PageController::class], 'experiance');

Route::get('/login', [PageController::class], 'login');

Route::get('/register', [PageController::class], 'register');

Route::get('/shop', [PageController::class], 'shop');

Route::get('/single', [PageController::class], 'single');

Route::get('/team', [PageController::class], 'team');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
