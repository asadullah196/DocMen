<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm(Request $request){
        //return view('constructions/registration');
        return $request->all();

    }

    public function showLoginForm()
    {
        return view('constructions/login');
    }
}
