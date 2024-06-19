<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){
        return view('MyAuth.login');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password'=> 'required'
        ]);
        $credentials = $request->only(['email','password']);
        if(auth()->attempt($credentials))
            return redirect()->route('mydashboard');
        else
            return redirect()->route('mylogin')->with('error','Email or Password are incorrect.');
    }
}
