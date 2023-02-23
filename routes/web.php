<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductsController;

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

// Product Category
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);


Route::get('/sewing-club', function () {
    return view('sewing-club', [
        "title" => "Sewing Club"
    ]);
});

Route::get('/service-center', function () {
    return view('service-center', [
        "title" => "Service Center"
    ]);
});

Route::get('/our-dealer', function () {
    return view('our-dealer', [
        "title" => "Our Dealer",
        "active" => "our dealer"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [DashboardProductsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProductsController::class)->middleware('auth');