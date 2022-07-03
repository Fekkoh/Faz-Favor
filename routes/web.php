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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

/*Route::get('/search', function () {
    return view('search');
});*/

/* Route::get('/favor_request', function () {
    return view('favor_request');
}); */

/* Template */
Route::get('/computer', function () {
    return view('computer');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/product', function () {
    return view('product');
});
/* End Template */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/favor_request', [App\Http\Controllers\Favor_RequestController::class, 'store']);
Route::get('/favor_request/create', [App\Http\Controllers\Favor_RequestController::class, 'create'])->middleware('auth')->name('favor_request.create');
Route::get('/search', [App\Http\Controllers\AreaController::class, 'index'])->name('search');
Route::get('/favor/{favor_request}', [App\Http\Controllers\Favor_RequestController::class, 'show'])->name('favor_request.show');
/* Route::get('/favor/{favor}', [App\Http\Controllers\AreaController::class, 'show'])->name('area.show'); */
/* Route::get('/search', [App\Http\Controllers\Favor_RequestController::class, 'index'])->name('search'); */

/* Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); */
