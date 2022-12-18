<?php

use App\Http\Controllers\contcart;
use App\Http\Controllers\conthome;
use App\Http\Controllers\contlogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contcategory;
use App\Http\Controllers\contproduct;
use App\Http\Controllers\contregister;

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
    return view('homePage',[
        "title" => "Home"
    ]);
});



Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "Checkout"
    ]);
});



Route::get('/help', function () {
    return view('help', [
        "title" => "Help"
    ]);
});

Route::get('/homePage', [conthome::class, 'index']); 
Route::get('/keranjang', [contcart::class, 'index'])->middleware('auth');

// LOGIN ROUTE
Route::get('/login', [contlogin::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [contlogin::class, 'authenticate']);
Route::post('/logout', [contlogin::class, 'logout']);
// REGISTER ROUTE
Route::get('/register', [contregister::class, 'index'])->middleware('guest');
Route::post('/register', [contregister::class, 'store']);

Route::get('/testnih', function () {
    return view('testnih',[
        "title" => "test web"
    ]);
});

// PRODUCT ROUTE
Route::get('/sayurkatepro', [contcategory::class, 'vegetable']);
Route::get('/dagingkatepro', [contcategory::class, 'meat']);
Route::get('/buahkatepro', [contcategory::class, 'fruit']);
Route::get('/rempahkatpro', [contcategory::class, 'spice']);

// SINGLE ROUTE
Route::get('/singleProduk/{id}', [contproduct::class, 'index']);
Route::post('/singleProduk/{id}', [contproduct::class, 'store']);


Route::get('/searchbarang', [contcategory::class, 'search']);
Route::get('/userprofile', function () {
    return view('userprofile', [
        "title" => "Profile"
    ]);
});


// ADMIN ROUTE 
Route::get('/admin-test', function () {
    return view('admin-test',[
        "title" => "admin"
    ]);
});


