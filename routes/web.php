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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/products', function () {
    return view('products', [
        "title" => "Products"
    ]);
});

Route::get('/category', function () {
    return view('category', [
        "title" => "Category"
    ]);
});

Route::get('/list_product', function () {
    return view('list_product', [
        "title" => "List Product"
    ]);
});

Route::get('/club', function () {
    return view('club', [
        "title" => "Sewing Club"
    ]);
});

Route::get('/dealer', function () {
    return view('dealer', [
        "title" => "Our Dealer"
    ]);
});

Route::get('/service', function () {
    return view('service', [
        "title" => "Service Center"
    ]);
});