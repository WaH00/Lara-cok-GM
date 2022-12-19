<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\temporder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class contproduct extends Controller
{
    public function index($id){
        
        return view('singleProduk', [
            "title" => "Request",
            "item" => barang::find($id),
            "user_id" => Auth::user()->id,
        ]);

    }

    public function store(Request $request){

        $reqorder = $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        if(temporder::where('user_id', Auth::user()->id)->where('product_id', $reqorder['product_id'])->exists()){ 

            if($reqorder['quantity']>0){
                
                temporder::where('user_id',  Auth::user()->id)->where('product_id', $reqorder['product_id'])->update($reqorder);
                return back()->with('success', 'Item Updated! ');

            }else{

                temporder::where('user_id',  Auth::user()->id)->where('product_id', $reqorder['product_id'])->delete();
                return back()->with('success', 'Item quantity 0, item deleted!');
                
            }
        }else{
            // $tes = DB::table('temporders')->select(DB::raw('(temporders.quantity * barangs.price) as total'))->leftjoin('barangs', 'barangs.id','=','temporders.product_id')->where('user_id', Auth::user()->id)->get();
            // $total = DB::table('temporders')->select(DB::raw('(temporders.quantity * barangs.price) as total'))->leftjoin('barangs', 'barangs.id','=','temporders.product_id')->where('user_id',  Auth::user()->id)->where('product_id', $reqorder['product_id'])->get();
            // echo($total);
            // echo($tes);
            temporder::create($reqorder);
            // $join = temporder::select('temporders.quantity','temporders.id' ,'barangs.name', 'barangs.price')->join('barangs','barangs.id','=','temporders.product_id')->get();
            // return back()->with('success', 'Added to cart!');
        }

    }
}
