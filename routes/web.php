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
    return view('welcome');
});
Auth::routes(['register'=>false]);

//  Route::get('/',[App\Http\Controllers\CategoryController::class, 'create']);
//  Route::get('/category/create',[App\Http\Controllers\CategoryController::class, 'create']);
route::resource('category',App\Http\Controllers\CategoryController::class)->middleware('auth');

// route::post('category/create' , [App\Http\Controllers\HomeController::class , 'store' ]);

Route::resource('food', App\Http\Controllers\FoodController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

