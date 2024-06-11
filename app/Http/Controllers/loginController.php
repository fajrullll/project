<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    function index(){
        return view('login.index');
    }

     function masuk(){
        return view('masuk');
    }

    function login(Request $request){
        $request->validate([

        'email' => 'required',
        'password' => 'required'


        ]);

        $SPG =[
            'email' => $request->email,
        'password' => $request->password,
        ];
        
        if(Auth::attempt($SPG)){
            return redirect('masuk')->with('berhasil', 'berhasil masuk');
        }
        else{
            return redirect('gagal')->with('gagal', 'gagal masuk');
        };
        
    }


}
