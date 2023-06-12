<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(Auth::user()){
            return redirect('/');
        }
        return view('auth.login');
    }

    public function setLoggedIn(User $user){
        Auth::login($user);
        return redirect()->route('home');
    }

    public function setLoggedOut(){
        Auth::logout();
        return redirect()->route('login');
    }

}
