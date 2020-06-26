<?php

namespace D3CR33\Auth\Http\Controllers;

use Illuminate\Http\Request;

class AuthController
{

    public function login()
    {
        return view('Auth::login');
    }
}
