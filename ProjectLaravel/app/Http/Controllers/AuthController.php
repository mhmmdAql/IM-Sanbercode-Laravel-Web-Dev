<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register () {
        return view('/page.register');
    }


    public function welcome(Request $request){
        $firstname = $request->input('FirstName');
        $lastname = $request->input('LastName');

        return view('page.welcome', ['namadepan' => $firstname, 'namabelakang' => $lastname]);

    }
}
