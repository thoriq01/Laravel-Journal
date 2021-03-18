<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserBaru;
use GrahamCampbell\ResultType\Success;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserBaruController extends Controller
{
    public function loginForm(Request $request)
    {
        return view('welcome');
    }
    public function index()
    {
        if (Auth::check()) {
            return view('login');
        } else {
            return back();
        }
    }
    public function postLogin(Request $request)
    {
        $data = $request->validate([
            'username',
            'password',
        ]);
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            if (Auth::user()->role == 'Editor') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user');
            }
            return view('login');
        }
        return back()->with('error', 'username atau password salah !')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('getFormLogin')->withInput();
    }

    public function createUser(Request $request)
    {

        $user = UserBaru::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->name
        ]);
        if ($user == Auth::user()) {
            return back()->with('error', 'Username sudah terdaftar');
        } else {
            return redirect('/')->with('success', 'Berhasil Terdaftar');
        }
    }

    public function getRegister()
    {
        return view('register');
    }
}
