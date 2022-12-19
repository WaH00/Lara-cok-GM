<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class contregister extends Controller
{
    public function index(){
        
        return view('register', [
            "title" => "Register"
        ]);

    }

    public function store(Request $request){
        
        $validuserdetail = $request->validate([
            'adress'=>'required',
            'telp'=>'required'
        ]);

        $validdatauser = $request->validate([
            'name'=>['required','max:255'],
            'email'=>'required|email:dns',
            'username'=>'required|min:8|max:50',
            'password'=>'required|min:8'
        ]);

        $validdatauser['password'] = Hash::make($validdatauser['password']);

        User::create($validdatauser);
        user_detail::create($validuserdetail);

        // $this->$request->session()->flash('success', 'Regitration Successfull! Please Login');

        return redirect('/login')->with('success', 'Regitration Successfull! Please Login');

    }
}
