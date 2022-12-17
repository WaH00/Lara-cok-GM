<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contlogin extends Controller
{
    public function index(){

        return view('login', [
            "title" => "Login"
        ]);

    }
    
    public function authenticate(Request $request){

        $inputedacc = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($inputedacc)){
            $request->session()->regenerate();
            return redirect()->intended('/homePage');
        }

        return back()->with('error', 'Login Failed! Please try again');

    }

    public function logout(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

}
