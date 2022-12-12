<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contregister extends Controller
{
    public function index(){
        
        return view('register', [
            "title" => "Register"
        ]);

    }

    public function store(){
        
        return request()->all();

    }
}
