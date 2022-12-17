<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contcart extends Controller
{
    public function index(){

        return view('keranjang', [
            "title" => "Cart"
        ]);
        
    }
}
