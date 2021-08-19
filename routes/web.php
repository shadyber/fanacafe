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
    $items=\App\Models\Item::all();
    return view('welcome')->with(['items'=>$items]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/item',\App\Http\Controllers\ItemController::class);
Route::resource('/category',\App\Http\Controllers\ItemCategoryController::class);
Route::resource('/morephoto',\App\Http\Controllers\ItemPhotoController::class);
