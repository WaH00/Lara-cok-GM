<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class contcategory extends Controller{

    public function search(){
        
        $barang = barang::latest();

        if(request('search')){
            $barang->where('name', 'like', '%' . request('search') . '%');
        }

        return view('search',[
            "title" => "Search",
            "item" => $barang->get()
        ]);
    }

    public function vegetable(){

        return view('sayurkatepro', [
            "title" => "Sayur",
            "item" => barang::where('category_id', 1)->get(),
        ]);
        
    }

    public function spice(){

        return view('rempahkatpro', [
            "title" => "Rempah",
            "item" => barang::where('category_id', 4)->get(),
        ]);
        
    }

    public function meat(){

        return view('dagingkatepro', [
            "title" => "Daging",
            "item" => barang::where('category_id', 2)->get(),
        ]);
        
    }

    public function fruit(){

        return view('buahkatepro', [
            "title" => "Buah",
            "item" => barang::where('category_id', 3)->get(),
        ]);
        
    }

    public function singleProduct($id){
        
        return view('singleProduk', [
            "title" => "Request",
            "item" => barang::find($id)

        ]);
    }

}
