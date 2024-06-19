<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('MyAuth.dashboard');
    }
    public function logout(){
        auth()->logout();
        return to_route('mylogin');
    }
}
