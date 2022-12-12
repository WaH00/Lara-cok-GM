<?php

use App\Http\Controllers\contcategory;
use Illuminate\Support\Facades\Route;
use App\Models\barangs\barang;
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

Route::get('/buahkatepro', [contcategory::class, 'fruit']);

Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "Checkout"
    ]);
});

Route::get('/dagingkatepro', [contcategory::class, 'meat']);

Route::get('/help', function () {
    return view('help', [
        "title" => "Help"
    ]);
});

Route::get('/homePage', function () {
    return view('homePage',[
        "title" => "Home"
    ]);
});

Route::get('/keranjang', function () {
    return view('keranjang', [
        "title" => "Cart"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::get('/rempahkatpro', [contcategory::class, 'spice']);

Route::get('/testnih', function () {
    return view('testnih',[
        "title" => "test web"
    ]);
});

Route::get('/sayurkatepro', [contcategory::class, 'vegetable']);

Route::get('/singleProduk/{id}', [contcategory::class, 'singleProduct']);

Route::get('/userprofile', function () {
    return view('userprofile', [
        "title" => "Profile"
    ]);
});
