<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route directly to view
Route::get('/', function () {
    return view('welcome');
});

Route::get('/anhduy', function () {
    return view('welcomeanhduy');
});


Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

// Route to controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * 
 */
Route::resource('products', 'App\Http\Controllers\ProductController');