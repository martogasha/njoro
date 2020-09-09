<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function Login(Request $request){
        if (Auth::attempt([
            'phone' => $request->phone,
            'password' => $request->password,
        ])){
            if (Auth::user()->role ==1) {
                return redirect(url('counter'))->with('success', 'LOGIN SUCCESS');
            }
            else{
                return redirect()->back()->with('error','Not Authorised');

            }
        }
        else{
            return redirect()->back()->with('error','CREDENTIALS DONT MATCH');
        }
    }
}
