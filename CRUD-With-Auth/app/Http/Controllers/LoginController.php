<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formLogin(){
        return view('formLogin');
    }

    public function postLogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            return redirect('/');
        }
        else{
            return back()->with('message','Username Atau Password Salah');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return back();
    }
}
