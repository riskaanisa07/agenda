<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    function index(){
        if($user = Auth::user()){
            if($user->level == '1'){
                return redirect()->intended('Dashboard_Admin');
            }elseif($user->level == '2'){
                return redirect()->intended('Dashboard_Guru');
            }
        }
        return view('login.index');
    
    }

    function proses(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
            [
                'username.required' => 'username tidak bole kosong',
            ]
        );

        $kredinsial = $request->only('username', 'password');
        if(Auth::attempt($kredinsial)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == '1'){
                return redirect()->intended('guru');
            }elseif($user->level == '2'){
                return redirect()->intended('kegiatan/create');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'maaf username atau password salah',
        ])->onlyInput('username');

    }
        function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
