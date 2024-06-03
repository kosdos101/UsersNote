<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function index(){
        return view('contactus');
    }
    function store(Request $request){
        $subject = $request->subject;
        $name = $request->name;
        $email = $request->email;
        $msg = $request->msg;
        Mail::send('email.contact', compact('subject','name','email','msg'),function($messge) use ($email , $subject){
            $messge->to($email);
            $messge->subject($subject);
        });
        return back()->with('success','Thanks for Contacting Us!');
    }
}
