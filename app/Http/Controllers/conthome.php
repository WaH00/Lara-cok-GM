<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conthome extends Controller
{
    public function index(){
        
        return view('homePage',[
            "title" => "Home"
        ]);
        
    }
}
