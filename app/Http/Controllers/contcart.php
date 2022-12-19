<?php

namespace App\Http\Controllers;

use App\Models\temporder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class contcart extends Controller
{
    public function index(){

        return view('keranjang', [
            "title" => "Cart",
            "cart" => temporder::where('user_id', Auth::user()->id)->get(),
            // "total" => DB::table('temporders')->select(DB::raw('(temporders.quantity * barangs.price) as total'))->leftjoin('barangs', 'barangs.id','=','temporders.product_id')->where('user_id', Auth::user()->id)->get() 
        ]);
    }
}
