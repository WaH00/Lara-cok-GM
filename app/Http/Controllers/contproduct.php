<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class contproduct extends Controller
{
    public function index($id){
        
        return view('singleProduk', [
            "title" => "Request",
            "item" => barang::find($id)
        ]);

    }

    public function store(Request $request){

        

    }
}
